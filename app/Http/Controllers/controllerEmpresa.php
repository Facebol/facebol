<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Ciudad;
class controllerEmpresa extends Controller
{
    public function index(){

    	$empresa = Empresa::orderBy('id','desc')->paginate('5');
    	return view('panel.empresas.index',compact('empresa'));

    }

    public function create(){

    	$ciudad = Ciudad::orderBy('id','desc')->pluck('nombre','id');
    	return view('panel.empresas.create', compact('ciudad'));

    }

   	public function store(Request $request){

   		Empresa::create([
   			'nombre'=>$request->nombre,
   			'descripcion'=>$request->descripcion,
   			'telefono'=>$request->telefono,
   			'email'=>$request->email,
   			'facebook'=>$request->facebook,
   			'web'=>$request->web,
   			'imagen'=>$request->imagen,
   			'ciudad_id'=>$request->ciudad_id
   		]);
   		return redirect()->route('empresas.index');

   	}

   	public function edit($id){

   		$ciudad = Ciudad::orderBy('id','desc')->pluck('nombre','id');
   		$empresa = Empresa::find($id);
   		return view('panel.empresas.edit',compact('empresa','ciudad'));

   	}

   	public function update(Request $request, $id){

		$empresa = Empresa::find($id);
   		$empresa->fill([
   			'nombre'=>$request->nombre,
   			'descripcion'=>$request->descripcion,
   			'telefono'=>$request->telefono,
   			'email'=>$request->email,
   			'facebook'=>$request->facebook,
   			'web'=>$request->web,
   			'imagen'=>$request->imagen,
   			'ciudad_id'=>$request->ciudad_id
		   ]);
		$empresa->save();
   		return redirect()->route('empresas.index');
   	} 
}
