<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Auth;
use Alert;
use Session;
use Exception;
use App\Http\Requests\RequestCategoriaCreate;
use App\Http\Requests\RequestCategoriaUpdate;

class controllerCategoria extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
		$this->middleware('admin');        
    }
    public function index()
    {
        $categorias=Categoria::orderBy('id','desc')->paginate(5);
        return view('panel.categorias.index',compact('categorias'));
    }
    public function pagination($n)
    {
        $categorias=Categoria::orderBy('id','desc')->paginate($n);
        Session::flash('title','Datos Cargados Correctamente');
        return view('panel.categorias.index',compact('categorias'));
    }
    public function search(Request $request)
    {
        $categorias=Categoria::where('nombre','LIKE',"%{$request->search}%")->get();
        Session::flash('title','Datos Buscados Correctamente');
        return view('panel.categorias.index',compact('categorias'));
    }
    public function create()
    {
        return view('panel.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCategoriaCreate  $request)
    {
        Categoria::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
        ]);
        Alert::success('Exito!!','El registro fue realizado exitosamente');
        return redirect()->route('categoria.index');
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
        $categoria=Categoria::find($id);
        return view('panel.categorias.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestCategoriaUpdate  $request, $id)
    {
        $categoria= Categoria::find($id);
        $categoria->fill([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'imagen'=>$request->imagen,
        ]);
        $categoria->save();
        Alert::success('Exito!!','El registro fue editado exitosamente');
        return redirect()->route('categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria= Categoria::find($id);
        $categoria->delete();
        Alert::success('Exito!!','El registro se elimino correctamente');
        return redirect()->route('categoria.index');

    }
}
