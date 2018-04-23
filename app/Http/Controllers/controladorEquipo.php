<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Equipo;
use Session;
use Alert;
use App\Http\Requests\RequestEquipoCreate;
use App\Http\Requests\RequestEquipoUpdate;
class controladorEquipo extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
        $this->middleware('sudo');
    }
    public function index()
    {
        $equipos = Equipo::orderBy('id','desc')->paginate('5');
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.equipo.index',compact('equipos'));
    }
    public function pagination($n)
    {
        $equipos=Equipo::orderBy('id','desc')->paginate($n);
        Session::flash('title','Datos Cargados Correctamente');
        return view('panel.equipo.index',compact('equipos'));
    }
    public function search(Request $request)
    {
        $equipos=Equipo::where('nombre','LIKE',"%{$request->search}%")
                        ->orWhere('cargo','LIKE',"%{$request->search}%")->get();
        Session::flash('title','Datos Buscados Correctamente');
        return view('panel.equipo.index',compact('equipos'));
    }
    public function create()
    {
        $equipo = Equipo::orderBy('id','desc')->pluck('nombre','id');
        return view('panel.equipo.create', compact('eqipo'));
    }

    public function store(RequestEquipoCreate $request)
    {
            Equipo::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'cargo'=>$request->cargo
        ]);
        Alert::success('Exito!!','El registro se creo correctamente');
        return redirect()->route('equipo.index');
    }
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        return view('panel.equipo.edit',compact('equipo'));
    }
    public function update(RequestEquipoUpdate $request, $id)
    {
        $equipo = Equipo::find($id);
        $equipo->fill([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'cargo'=>$request->cargo
           ]);
        $equipo->save();
        Alert::success('Exito!!','El registro se edito correctamente');
        return redirect()->route('equipo.index');
    }
    public function destroy($id)
    {
        $equipo= Equipo::find($id);
        $equipo->delete();
        Alert::success('Exito!!','El registro se elimino correctamente');
        return redirect()->route('equipo.index');
    }
}
