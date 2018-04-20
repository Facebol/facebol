<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Auth;
use Alert;
class controllerPanel extends Controller
{
    public function __construct()
    {
        $this->middleware('panel');
    }
    public function startAdmin()
    {   
       //Alert::success('Warning Title', 'Warning Message');
       return view('panel.index');
    }
    public function startCurrier()
    {
        $name=ucfirst(Auth::user()->name);
        return view('panel.panel-c.index');
    }
}
