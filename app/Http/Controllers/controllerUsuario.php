<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\dataTableUsuario;
use App\User;
use App\Ciudad;
use Session;
use Validator;
use App\Http\Requests\RequestUsuarioCreate;
use App\Http\Requests\RequestUsuarioUpdate;
use Alert;
class controllerUsuario extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
		$this->middleware('admin');        
    }
    public function index()
    {
       $usuarios=User::orderBy('id','desc')->paginate(10);
       Session::flash('message','Datos Cargados Correctamente');
       return view('panel.usuarios.index',compact('usuarios'));
    }
    public function pagination($n)
    {
        $usuarios=User::orderBy('id','desc')->paginate($n);
        Session::flash('title','Datos Cargados Correctamente');
        return view('panel.usuarios.index',compact('usuarios'));
    }
    public function search(Request $request)
    {
        $usuarios=User::where('nombre','LIKE',"%{$request->search}%")
                        ->orWhere('apellido','LIKE',"%{$request->search}%")
                        ->orWhere('email','LIKE',"%{$request->search}%")->get();
        Session::flash('title','Datos Buscados Correctamente');
        return view('panel.usuarios.index',compact('usuarios'));
    }
    public function create()
    {
        $ciudades=Ciudad::orderBy('id','desc')->pluck('nombre','id');
        return view('panel.usuarios.create',compact('ciudades'));
    }
    public function codigo()
    {
        $codigo=str_random(20);
        $usuario=User::where('codigo',$codigo)->first();
        if($usuario)
        {
            $this->codigo();
        }else{
            return $codigo;
        }
    }
    public function store(RequestUsuarioCreate $request)
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
                    'codigo'=>$this->codigo(),
                    'cod_face'=>$cod_face,
                    'ciudad_id'=>$request->ciudad_id,
                    'activo'=>1,
                    'tipo'=>$request->tipo,
                ]
            );
            Alert::success('Exito!!','El registro fue realizado exitosamente');
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

    public function update(RequestUsuarioUpdate $request, $id)
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
        Alert::success('Exito!!','El registro fue editado exitosamente');
        return redirect()->route('usuarios.index');
    }
}
