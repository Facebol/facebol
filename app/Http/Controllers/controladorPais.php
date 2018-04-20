<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;
use Alert;
use Exception;
class controladorPais extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function index()
    {
      $pais=Pais::orderBy('id','desc')->paginate('5');
      return view('panel.pais.index',compact('pais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $pais = Pais::orderBy('id','desc')->pluck('nombre');
        return view('panel.pais.create', compact('pais'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        Pais::create(
            [
                'nombre'=>$request->nombre,

            ]
        );
        Alert::success('Registro Realizado','El registro fue un exito');
        return redirect()->route('pais.index');
        }catch(Exception $e){
            Alert::error('Error','El registro '.$request->nombre.' no pudo ser eliminado')->showConfirmButton('OK','#666666');
            return redirect()->route('pais.index');
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

    public function edit($id)
    {
        $pais=Pais::find($id);
        return view('panel.pais.edit',compact('pais'));
    }

    public function update(Request $request, $id)
    {
        $nombre=Pais::where('id',$id)->first()->nombre;
        try{
            $pais= Pais::find($id);
            $pais->fill(
                [
                    'nombre'=>$request->nombre,
                ]
            );
            $pais->save();
            Alert::success('Edicion Exitosa','El registro fue editado correctamente');
            return redirect()->route('pais.index'); 
        }catch(Exception $e)
        {
            Alert::error('Error','El registro '.$request->nombre.' no pudo ser editado')->showConfirmButton('OK','#666666');
            return redirect()->route('pais.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nombre=Pais::where('id',$id)->first()->nombre;
        try
        {
            $pais= Pais::find($id);
            $pais->delete();
            Alert::success('Realizado','El registro '.$nombre.' fue eliminado correctamente');
            return redirect()->route('pais.index');
        }catch(Exception $e){
            Alert::error('Error','El registro '.$nombre.' no pudo ser eliminado')->showConfirmButton('OK','#666666');
            return redirect()->route('pais.index');
        }
    }
}
