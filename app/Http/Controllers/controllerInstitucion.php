<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institucion;

class controllerInstitucion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institucion = Institucion::orderBy('id','desc')->paginate(5);
        return view('panel.institucion.index',compact('institucion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.institucion.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Institucion::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'direccion'=>$request->direccion,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twiter'=>$request->twiter,
            'vision'=>$request->vision,
            'mision'=>$request->mision,
            'imagen'=>$request->imagen,
        ]);
        return redirect()->route('institucion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institucion=Institucion::find($id);
        return view('panel.institucion.edit',compact('institucion'));
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
        $institucion=Institucion::find($id);
        $institucion->fill([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'direccion'=>$request->direccion,
            'telefono'=>$request->telefono,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'twiter'=>$request->twiter,
            'vision'=>$request->vision,
            'mision'=>$request->mision,
            'imagen'=>$request->imagen,
        ]);
        $institucion->save();
        return redirect()->route('institucion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
