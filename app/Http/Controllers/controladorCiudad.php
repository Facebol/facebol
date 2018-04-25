<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;
use App\Pais;
use Exception;
use Session;
use App\Http\Requests\RequestCiudadCreate;
use App\Http\Requests\RequestCiudadUpdate;
class controladorCiudad extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
		$this->middleware('admin');        
    }
    public function index()
    {
        $ciudad=Ciudad::orderBy('id','desc')->paginate('5');
        Session::flash('message','Datos Cargados Correctamente');
      return view('panel.ciudad.index',compact('ciudad'));
    }
    public function create()
    {
       $pais = Pais::orderBy('id','desc')->pluck('nombre','id');
        return view('panel.ciudad.create', compact('pais'));
    }
    public function store(RequestCiudadCreate $request)
    {
       Ciudad::create(
      [
        'nombre'=>$request->nombre,
        'pais_id'=>$request->pais_id,
      ]

       );

       return redirect()->route('ciudad.index');
    }
    public function edit($id)
    {
        $pais = Pais::orderBy('id','desc')->pluck('nombre','id');        
        $ciudad=Ciudad::Find($id);
        return view('panel.ciudad.edit',compact('ciudad','pais'));

    }
    public function update(RequestCiudadUpdate $request, $id)
    {
        $ciudad= Ciudad::find($id);
        $ciudad->fill(
            [
               'nombre'=>$request->nombre,
                'pais_id'=>$request->pais_id,       
            ]
        );
         $ciudad->save();
        return redirect()->route('ciudad.index'); 
    }
    public function destroy($id)
    {
        try{
            $ciudad= Ciudad::find($id);
            $ciudad->delete();
            return redirect()->route('ciudad.index');
        }catch(Exception $e)
        {
            Session::flash('tile','Ups hubo un error');
            Session::flash('body',$e->getMessage());
            return redirect()->route('ciudad.index');
        }
    }
}
