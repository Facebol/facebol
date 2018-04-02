<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use Storage;
use Mail;
use App\Institucion;
use App\User;
use App\Categoria;
use App\Empresa;
use App\Equipo;
use App\Planes;
use App\PlanesDetalle;
use App\Actividad;

class controllerInicio extends Controller
{
    public function Inicio()
    {
        $institucion=Institucion::all();
        $planes= Planes::all();
        $planesDetalle = PlanesDetalle::all();
        return view('inicio.index',compact('planes','planesDetalle'));
    }
    public function suscribir(Request $datos)
    {
        Email::create([
            'email'=>$datos->email
        ]);
        $name = '/FaceBol.pptx';
        $path = public_path('imagen').$name;
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
        $usuario=User::where('email',$datos->email)->first();
        if(!$usuario){
            Email::create([
                'email'=>$datos->email,
            ]);
        }
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
            $user=['nombre'=>$usuario->nombre,'email'=>$usuario->email,'codigo'=>$usuario->codigo];
            Mail::send('emails.emailReset',$user,function($message) use ($user){
                $message->to($user['email'],$user['nombre'])
                ->subject('Recuperacion de Contraseña');
            });
        }      
        return redirect()->route('inicio');
    }
    public function passwordReset($dato)
    {
        $usuario=User::where('codigo',$dato)->first();
        if($usuario)
        {
            return view('inicio.reset.index',compact('dato'));
        }else
        {
            return redirect()->route('inicio');
        }    
    }
    public function newCodigo()
    {
        
    }
    public function passwordSave(Request $datos)
    {
        $codigo=str_random(25);
        $user=User::where('codigo',$codigo)->first();
        if($usu)
        $usuario=User::where('codigo',$datos->codigo)->first();
        $usuario->fill(
            [
                'password'=>$datos->password,
                'codigo'=>str_random(25),
            ]
        );
        $usuario->save();
        return redirect()->route('inicio');
    }
    public function contactanos()
    {
        return view('inicio.contacto');
    }
    public function empresa()
    {
        $empresas=Empresa::all();
        return view('inicio.empresas',compact('empresas'));
    }
    public function categoria()
    {
        $categorias = Categoria::all();
        return view('inicio.categorias',compact('categorias'));
    }
    public function actividad()
    {
        $actividad = Actividad::all();
        return view('inicio.actividades',compact('actividad'));
    }
    public function equipo()
    {
        $equipo = Equipo::all();
        return view('inicio.equipo',compact('equipo'));
    }
}
