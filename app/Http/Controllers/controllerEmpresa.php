<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Ciudad;
use App\Categoria;
use App\User;
class controllerEmpresa extends Controller
{
	public function __construct()
    {
        $this->middleware('panel');
	}
    public function index(){
    	$empresa = Empresa::orderBy('id','desc')->paginate('5');
    	return view('panel.empresas.index',compact('empresa'));

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

	public function store(Request $request)
	{
		$usuario=User::where('cod_fa',$request->cod_user)->where('tipo','Empresa')->first();
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
		 		'usuario_id'=>$usuario->id,
				'ciudad_id'=>$request->ciudad_id,
				'video'=>$request->video
			]);
			return redirect()->route('empresas.index');
		}else
		{
			return redirect()->route('empresa.create');
		}
   	}
   	public function edit($id){

      $usuario = User::orderBy('id','desc')->pluck('nombre','id');
      $categoria = Categoria::orderBy('id','desc')->pluck('nombre','id');
   		$ciudad = Ciudad::orderBy('id','desc')->pluck('nombre','id');
   		$empresa = Empresa::find($id);
   		return view('panel.empresas.edit',compact('empresa','ciudad','categoria','usuario'));

   	}

   	public function update(Request $request, $id){

		$empresa = Empresa::find($id);
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
        'categoria_id'=>$request->categoria_id,
        'imagen'=>$request->imagen,
        'usuario_id'=>$request->usuario_id,
		'ciudad_id'=>$request->ciudad_id,
		'video'=>$request->video
		   ]);
		$empresa->save();
   		return redirect()->route('empresas.index');
   	} 
}
