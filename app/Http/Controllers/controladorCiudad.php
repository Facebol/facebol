<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;
use Exception;
use Session;
class controladorCiudad extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function index()
    {
        $ciudad=Ciudad::orderBy('id','desc')->paginate('5');
        Session::flash('message','Datos Cargados Correctamente');
      return view('panel.ciudad.index',compact('ciudad'));
    }
    public function create()
    {
       $ciudad = Ciudad::orderBy('id','desc')->pluck('nombre');
        return view('panel.ciudad.create', compact('ciudad'));
    }
    public function store(Request $request)
    {
       Ciudad::create(
      [
        'nombre'=>$request->nombre,

      ]

       );

       return redirect()->route('ciudad.index');
    }
    public function edit($id)
    {
        $ciudad=Ciudad::Find($id);
        return view('panel.ciudad.edit',compact('ciudad'));

    }
    public function update(Request $request, $id)
    {
        $ciudad= Ciudad::find($id);
        $ciudad->fill(
            [
               'nombre'=>$request->nombre,
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
