<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actividad;
class controladorActividades extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividad::orderBy('id','desc')->paginate('5');
        return view('panel.actividades.index',compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $actividades = Actividad::orderBy('id','desc')->pluck('nombre','id');
        return view('panel.actividades.create', compact('actividades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Actividad::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
        ]);
        return redirect()->route('actividades.index');
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
        $actividades = Actividad::orderBy('id','desc')->pluck('nombre','id');
      
        return view('panel.actividades.edit',compact('actividades'));
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
        
        $actividades = Actividad::find($id);
        $actividades->fill([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
           ]);
        $actividades->save();
        return redirect()->route('actividades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $actividades= Actividad::find($id);
        $actividaes->delete();
        return redirect()->route('actividades.index');

    }
}
