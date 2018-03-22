<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use Storage;
use Mail;
use App\Institucion;
use App\User;

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
        $name = '\FaceBol.pptx';
        $path = storage_path('app').$name;
        $email = $datos->email;
        Mail::send('emails.emailPost',$datos->all(), function ($message) use ($path,$email) {
            $message->to($email,$email)
            ->subject('Acerca de Facebol');
            $message->attach($path);
        });
        return redirect()->route('inicio');
    }
    public function emailPost(Request $datos)
    {
        Email::create([
            'email'=>$datos->email,
        ]);
        Mail::send('emails.emailGet',$datos->all(),function($message){
            $message->to('facebol@facebolsrl.com','Facebol')
            ->subject('Mensaje de Usuario');
        });
        return redirect()->route('inicio');
    }
    public function emailReset(Request $datos)
    {
        $usuario = User::where('email',$datos->email)->first();
        if($usuario)
        {   
            Mail::send('emails.emailReset',$usuario,function($msj) use ($usuario){
                $message->to($usuario->email,$data->nombre)
                ->subject('Recuperacion de Contraseña');
            });
        }      
        return redirect()->route('inicio');
    }
    public function passwordReset($dato)
    {
        return view('panel.reset.index',compact('codigo'));
    }
}
