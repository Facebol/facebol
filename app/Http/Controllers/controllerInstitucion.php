<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institucion;
use Session;
class controllerInstitucion extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
        $this->middleware('sudo');
    }
    public function index()
    {
        $institucion = Institucion::orderBy('id','desc')->paginate(5);
        Session::flash('message','Datos Cargados Correctamente');
        return view('panel.institucion.index',compact('institucion'));
    }
    public function create()
    {
        return redirect()->route('institucion.index');
    
    }
    public function store(Request $request)
    {
        /*
        Institucion::create([
            'qSomos'=>$request->qSomos,
            'frase1'=>$request->frase1,
            'frase2'=>$request->frase2,
            'frase3'=>$request->frase3,
            'trabaja'=>$request->trabaja,
            'direccion'=>$request->direccion,
            'celular'=>$request->celular,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'youtube'=>$request->youtube,
            'instagram'=>$request->instagram,
            'google'=>$request->google,
            'vision'=>$request->vision,
            'mision'=>$request->mision,
            'imagen'=>$request->imagen,
        ]);
        return redirect()->route('institucion.index');*/
    }
    public function edit($id)
    {
        $institucion=Institucion::find($id);
        return view('panel.institucion.edit',compact('institucion'));
    }
    public function update(Request $request, $id)
    {
        $institucion=Institucion::find($id);
        $institucion->fill([
            'qSomos'=>$request->qSomos,
            'frase1'=>$request->frase1,
            'frase2'=>$request->frase2,
            'frase3'=>$request->frase3,
            'trabaja'=>$request->trabaja,
            'direccion'=>$request->direccion,
            'celular'=>$request->celular,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'youtube'=>$request->youtube,
            'instagram'=>$request->instagram,
            'google'=>$request->google,
            'vision'=>$request->vision,
            'mision'=>$request->mision,
            'imagen'=>$request->imagen,
        ]);
        $institucion->save();
        return redirect()->route('institucion.index');
    }
}
