<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class controllerLogin extends Controller
{
    public function start()
    {
        Session::flash('title-login','Bienvenido');
        Session::flash('text-login','Coloca tus datos para identificarte');
        Session::flash('img-login','img/info.png');
        return view('panel.login.login');
    }
    public function log(Request $request)
    {
        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]))
        {   
            if(Auth::user()->tipo =='administrador')
            {
               
                return redirect()->route('start-a');
            }else{
                return redirect()->route('start-c');
            }
        }else{
            Session::flash('title-login','Datos incorretos');
            Session::flash('text-login','Tus datos no son correctos');
            Session::flash('img-login','img/question.png');
            return view('panel.login.login');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('start');
    }
}
