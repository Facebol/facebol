<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Planes;
use Session;
use Auth;
use App\PlanesDetalle;
class controllerPlanes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planDetalle=PlanesDetalle::all();
        $planes=Planes::orderBy('id','desc')->paginate(5);
        return view('panel.planes.index',compact('planes','planDetalle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $plan=Planes::find($id);
        $planDetalle=PlanesDetalle::all();
        return view('panel.planes.edit',compact('plan','planDetalle'));
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
        $planDetalle=PlanesDetalle::all();
        foreach ($planDetalle as $descripcion)
        {

            $descripcion->fill([
                'descripcion'=>$request['nombre-'.$descripcion->id],
            ]);
            $descripcion->save();
        }
        $plan=Planes::find($id);
        $plan->fill([
            'nombre'=>$request->nombre,
            'precio'=>$request->precio,
            'plan'=>$request->plan,
            'moneda'=>$request->moneda
        ]);
        $plan->save();
        return redirect()->route('planes.index');
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
