<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use Storage;
use Mail;
class controllerInicio extends Controller
{
    public function Inicio()
    {
        return view('inicio.index');
    }
    public function suscribir(Request $datos)
    {
        Email::create([
            'email'=>$datos->email
        ]);
        
    }
}
