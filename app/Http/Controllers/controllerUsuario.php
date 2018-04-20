<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\dataTableUsuario;
use App\User;
use App\Ciudad;
class controllerUsuario extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function index()
    {
       $usuarios=User::orderBy('id','desc')->paginate(10);
       return view('panel.usuarios.index',compact('usuarios'));
    }

    public function create()
    {
        $ciudades=Ciudad::orderBy('id','desc')->pluck('nombre','id');
        return view('panel.usuarios.create',compact('ciudades'));
    }

    public function store(Request $request)
    {
        $cod_face=$request->ci."FB";
        User::create(
            [
                'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'ci'=>$request->ci,
                'direccion'=>$request->direccion,
                'celular'=>$request->celular,
                'email'=>$request->email,
                'password'=>$request->password,
                'imagen'=>$request->imagen,
                'codigo'=>str_random(20),
                'cod_face'=>$cod_face,
                'ciudad_id'=>$request->ciudad_id,
                'activo'=>1,
                'tipo'=>$request->tipo,
            ]
        );
        return redirect()->route('usuarios.index');
    }

    public function show($id)
    {
        $usuario=User::find($id);
        if($usuario->activo==1)
        {
            $usuario->fill(
                [
                    'activo'=>0,
                ]);
                
            $usuario->save();
        }else{
            $usuario->fill(
                [
                    'activo'=>1,
                ]);
            $usuario->save();
        }
        return redirect()->route('usuarios.index');
    }

    public function edit($id)
    {
        $ciudades=Ciudad::orderBy('id','desc')->pluck('nombre','id');
        $usuario=User::find($id);
        return view('panel.usuarios.edit',compact('usuario','ciudades'));
    }

    public function update(Request $request, $id)
    {
        $usuario= User::find($id);
        $cod_face=$request->ci."FB";
        $usuario->fill(
            [
                'nombre'=>$request->nombre,
                'apellido'=>$request->apellido,
                'ci'=>$request->ci,
                'direccion'=>$request->direccion,
                'celular'=>$request->celular,
                'email'=>$request->email,
                'password'=>$request->password,
                'imagen'=>$request->imagen,
                'cod_face'=>$cod_face,
                'ciudad_id'=>$request->ciudad_id,
                'tipo'=>$request->tipo,
            ]
        );
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    public function destroy($id)
    {
        
    }
}
