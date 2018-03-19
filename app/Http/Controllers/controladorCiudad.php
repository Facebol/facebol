<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;
class controladorCiudad extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudad=Ciudad::orderBy('id','desc')->paginate('5');
      return view('panel.ciudad.index',compact('ciudad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $ciudad = Ciudad::orderBy('id','desc')->pluck('nombre');
        return view('panel.pais.create', compact('ciudad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Ciudad::create(
      [
        'nombre'=>$request->nombre,

      ]

       );

       return redirect()->route('ciudad.index');
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
        $ciudad=Ciudad::Find($id);
        return view('panel.ciudad.edit',compact('ciudad'));

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
        $ciudad= Cidad::find($id);
        $ciudad->fill(
            [
               'nombre'=>$request->nombre,
            ]
        );
         $ciudad->save();
        return redirect()->route('ciudad.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $ciudad= Ciudad::find($id);
        $ciudad->delete();
        return redirect()->route('ciudad.index');
    }
}
