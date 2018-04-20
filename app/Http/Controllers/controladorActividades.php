<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actividad;
class controladorActividades extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
        
    }
    public function index()
    {
        $actividades = Actividad::orderBy('id','desc')->paginate('5');
        return view('panel.actividades.index',compact('actividades'));
    }
    public function create()
    {
        $actividades = Actividad::orderBy('id','desc')->pluck('nombre','id');
        return view('panel.actividades.create', compact('actividades'));
    }

    public function store(Request $request)
    {
            Actividad::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'tipo'=>$request->tipo,
            'fecha'=>$request->fecha,
            'activo'=>1,
        ]);
        return redirect()->route('actividades.index');
    }
    public function show($id)
    {
        $actividad=Actividad::find($id);
        if($actividad->activo==1)
        {
            $actividad->fill([
                'activo'=>0,
            ]);
            $actividad->save();
            return redirect()->route('actividades.index');
        }else
        {
            $actividad->fill([
                'activo'=>1,
            ]);
            $actividad->save();
            return redirect()->route('actividades.index');
        }
    }
    public function edit($id)
    {
        $actividad= Actividad::find($id);
        
        return view('panel.actividades.edit',compact('actividad'));
    }
    public function update(Request $request,$id)
    {
        $actividad= Actividad::find($id);
        $actividad->fill([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'tipo'=>$request->tipo,
            'fecha'=>$request->fecha,
            'activo'=>1,
        ]);
        $actividad->save();
        return redirect()->route('actividades.index');
    }
    public function destroy($id)
    {
        
        $actividades= Actividad::find($id);
        $actividaes->delete();
        return redirect()->route('actividades.index');

    }
}
