<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Auth;
class controllerPanel extends Controller
{
    public function startAdmin()
    {   
       
      
        return view('panel.usuarios.form.form');
    }
    public function startCurrier()
    {
        $name=ucfirst(Auth::user()->name);
        return view('panel.panel-c.index');
    }
}
