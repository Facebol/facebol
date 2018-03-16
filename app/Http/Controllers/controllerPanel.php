<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Auth;
class controllerPanel extends Controller
{
    public function startAdmin()
    {   
        $name=ucfirst(Auth::user()->name);
        Session::flash('title-panel','Que Tal '.$name.' !!!!');
        Session::flash('text-panel','Bienvenido al panel de Administracion!!');
        Session::flash('img-panel','img/info.png');
        return view('panel.panel-a.index');
    }
    public function startCurrier()
    {
        $name=ucfirst(Auth::user()->name);
        Session::flash('title-panel','Que Tal '.$name.' !!!!');
        Session::flash('text-panel','Bienvenido al panel podras encontrar tus actividades de hoy aqui!!');
        Session::flash('img-panel','img/info.png');
        return view('panel.panel-c.index');
    }
}
