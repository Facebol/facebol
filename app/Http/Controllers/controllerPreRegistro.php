<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreRegistro;
use App\User;
use Session;
use Alert;
use App\Institucion;
use App\Categoria;
use App\Http\Requests\RequestPreRegistroCreate;
class controllerPreRegistro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preRegistros=PreRegistro::orderBy('id','desc')->paginate(5);
        return view('panel.preRegistro.index',compact('preRegistros'));
    }

    public function pagination($n)
    {
        $preRegistros=PreRegistro::orderBy('id','desc')->paginate($n);
        Session::flash('title','Datos Cargados Correctamente');
        return view('panel.preRegistro.index',compact('preRegistros'));
    }
    public function search(Request $request)
    {
        $preRegistros=PreRegistro::where('nombre','LIKE',"%{$request->search}%")
                        ->orWhere('apellido','LIKE',"%{$request->search}%")
                        ->orWhere('email','LIKE',"%{$request->search}%")->get();
        Session::flash('title','Datos Buscados Correctamente');
        return view('panel.preRegistro.index',compact('preRegistros'));
    }
    
    public function create()
    {
        return view('panel.preRegistro.index',compact('preRegistro'));   
    }
    public function store(RequestPreRegistroCreate $request)
    {
    $institucion=Institucion::first();
    $categorias=Categoria::all();
    if($request->codigo!=null)
    {
        $usuario=User::where('cod_face',$request->codigo)->first();
        if($usuario)
        {
            PreRegistro::create(
                [
                    'nombre'=>$request->nombre,
                    'apellido'=>$request->apellido,
                    'email'=>$request->email,
                    'celular'=>$request->celular,
                    'usuario_id'=>$usuario->id,
                    'imagen'=>$request->imagen,
                ]);
            Session::flash('title','El Pre Registro fue un Éxito');
            Session::flash('body','Su pre registro fue un éxito, le mandamos un mensaje a su correo electrónico para mas información revíselo');
            return view('inicio.mensaje',compact('categorias','institucion'));
        }else{
            Session::flash('title','El Pre Registro no fue realizado');
            Session::flash('body','El codigo de usuario no existe porfavor revise el codigo y vuelva a realizar el registro');                
            return view('inicio.mensaje-error',compact('categorias','institucion'));
        }
    }else
    {
        PreRegistro::create(
            [
                'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'email'=>$request->email,
                'celular'=>$request->celular,
                'imagen'=>$request->imagen,
            ]);
        Session::flash('title','El Pre Registro fue un Éxito');
        Session::flash('body','Su pre registro fue un éxito, le mandaremos un mensaje a su correo electrónico para mas información revíselo');
        return view('inicio.mensaje',compact('categorias','institucion'));
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
