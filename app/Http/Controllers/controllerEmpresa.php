<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Ciudad;
use App\Categoria;
use App\User;
use Session;
use Alert;
use App\Http\Requests\RequestEmpresaCreate;
use App\Http\Requests\RequestEmpresaUpdate;
class controllerEmpresa extends Controller
{
	public function __construct()
    {
        $this->middleware('panel');
	}
    public function index(){
		$empresas = Empresa::orderBy('id','desc')->paginate('5');
		Session::flash('message','Datos Cargados Correctamente');
    	return view('panel.empresas.index',compact('empresas'));

    }
	public function pagination($n)
    {
        $empresas=Empresa::orderBy('id','desc')->paginate($n);
        Session::flash('title','Datos Cargados Correctamente');
        return view('panel.empresas.index',compact('empresas'));
    }
    public function search(Request $request)
    {
        $empresas=Empresa::where('nombre','LIKE',"%{$request->search}%")
                        ->orWhere('email','LIKE',"%{$request->search}%")->get();
        Session::flash('title','Datos Buscados Correctamente');
        return view('panel.empresas.index',compact('empresas'));
    }
    public function create(){

      $usuario = User::orderBy('id','desc')->pluck('cod_face','id');
      $categoria = Categoria::orderBy('id','desc')->pluck('nombre','id');
    	$ciudad = Ciudad::orderBy('id','desc')->pluck('nombre','id');
    	return view('panel.empresas.create', compact('ciudad','usuario','categoria'));

	}
	public function show($id)
	{
		$empresa=Empresa::find($id);
		if($empresa->activo==1)
		{
			$empresa->fill([
				'activo'=>0,
			]);
			$empresa->save();
		}else{
			$empresa->fill([
				'activo'=>1,
			]);
			$empresa->save();
		}
		return redirect()->route('empresas.index');
	}

	public function store(RequestEmpresaCreate $request)
	{
		$usuario=User::where('cod_face',$request->cod_face)->where('tipo','Empresa')->first();
		if($usuario)
		{
			Empresa::create([
				'nombre'=>$request->nombre,
				'descripcion'=>$request->descripcion,
				'telefono'=>$request->telefono,
				'email'=>$request->email,
				'facebook'=>$request->facebook,
		 		'direccion'=>$request->direccion,
		 		'promocion'=>$request->promocion,
		 		'descuento'=>$request->descuento,
		 		'horario'=>$request->horario,
		 		'activo'=>1,
				'web'=>$request->web,
		 		'categoria_id'=>$request->categoria_id,
				'imagen'=>$request->imagen,
				'cod_face'=>$request->cod_face,
		 		'usuario_id'=>$usuario->id,
				'ciudad_id'=>$request->ciudad_id,
				'video'=>$request->video
			]);
			return redirect()->route('empresas.index');
            Alert::success('Exito!!','El registro fue realizado exitosamente');
		}else
		{
			return redirect()->route('empresas.create');
			Alert::error('Ups!!','El registro no pudo ser editado, el usuario debe ser un tipo Empresa');				
		}
   	}
   	public function edit($id){

      $usuario = User::orderBy('id','desc')->pluck('nombre','id');
      $categoria = Categoria::orderBy('id','desc')->pluck('nombre','id');
   		$ciudad = Ciudad::orderBy('id','desc')->pluck('nombre','id');
   		$empresa = Empresa::find($id);
   		return view('panel.empresas.edit',compact('empresa','ciudad','categoria','usuario'));

   	}

   	public function update(RequestEmpresaUpdate $request, $id){
		$usuario=User::where('cod_face',$request->cod_face)->where('tipo','Empresa')->first();
		$empresa = Empresa::find($id);
		if($usuario)
		{
			$empresa->fill([
				'nombre'=>$request->nombre,
				'descripcion'=>$request->descripcion,
				'telefono'=>$request->telefono,
				'email'=>$request->email,
				'facebook'=>$request->facebook,
				'direccion'=>$request->direccion,
				'promocion'=>$request->promocion,
				'descuento'=>$request->descuento,
				'horario'=>$request->horario,
				'web'=>$request->web,
				'cod_face'=>$request->cod_face,
				'categoria_id'=>$request->categoria_id,
				'imagen'=>$request->imagen,
				'usuario_id'=>$usuario->id,
				'ciudad_id'=>$request->ciudad_id,
				'video'=>$request->video
			]);
			$empresa->save();
			Alert::success('Exito!!','El registro fue editado exitosamente');		
		    return redirect()->route('empresas.index');
		}else
		{
			Alert::error('Ups!!','El registro no pudo ser editado, el usuario debe ser un tipo Empresa');	
			return redirect()->route('empresas.edit',['empresa'=>$empresa]);
		}
   	} 
}
