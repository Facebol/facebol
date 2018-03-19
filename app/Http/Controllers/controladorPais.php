<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;
class controladorPais extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        Pais::create(
            [
                'nombre'=>$request->nombre,

            ]

        );
        return redirect()->route('pais.index');
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
        $pais=Pais::find($id);
        return view('panel.pais.edit',compact('pais'));
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
         $pais= Pais::find($id);
        $pais->fill(
            [
                'nombre'=>$request->nombre,
            ]
        );
        $pais->save();
        return redirect()->route('pais.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pais= Pais::find($id);
        $pais->delete();
        return redirect()->route('pais.index');
    }
}
