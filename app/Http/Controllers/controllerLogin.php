<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class controllerLogin extends Controller
{
    public function log(Request $request)
    {
        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]))
        {   
            if(Auth::user()->tipo =='administrador')
            {
               
                return "logueo";
            }else{
                return "logueo";
            }
        }else{
            return redirect()->route('inicio');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('inicio');
    }
}
