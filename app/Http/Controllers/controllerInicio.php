<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use Storage;
use Mail;
use App\PreRegistro;
use App\Institucion;
use App\User;
use App\Categoria;
use App\Empresa;
use App\Equipo;
use App\Planes;
use App\PlanesDetalle;
use App\Actividad;
use Session;
class controllerInicio extends Controller
{
    public function Inicio()
    { 
        $plan=Planes::first();
        $planDetalle=PlanesDetalle::all();
        $institucion=Institucion::first();
        $planes= Planes::all();
        $planesDetalle = PlanesDetalle::all();
        $categorias=Categoria::all();
        return view('inicio.index',compact('planes','planesDetalle','categorias','institucion','plan','planDetalle'));
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
        $codigo=str_random(25);
        $user=User::where('codigo',$codigo)->first();
        if($user)
        {
            $this->newCodigo();
        }else
        {
            return $codigo;
        }
    }
    public function passwordSave(Request $datos)
    {
        $usuario=User::where('codigo',$datos->codigo)->first();
        $usuario->fill(
            [
                'password'=>$datos->password,
                'codigo'=>$this->newCodigo(),
            ]
        );
        $usuario->save();
        return redirect()->route('inicio');
    }
    public function preRegistro(Request $datos)
    {
        $usuario=User::where('cod_face',$datos->codigo)->first();
        if($usuario)
        {
        PreRegistro::create(
            [
                'nombre'=>$datos->nombre,
                'apellido'=>$datos->apellido,
                'email'=>$datos->email,
                'celular'=>$datos->celular,
                'usuario_id'=>$usuario->id,
            ]);
            Session::flash('title','El Pre Registro fue un Éxito');
            Session::flash('body','Su pre registro fue un éxito, le mandamos un mensaje a su correo electrónico para mas información revíselo');
            return view('inicio.mensaje');
        }else{
            Session::flash('title','El Pre Registro No Fue Realizado');
            Session::flash('body','No se pudo realizar el pre registro ya que el codigo de usuario no fue encontrado, por favor vuelva a realizar el registro y verifique el el codigo.');
            return view('inicio.mensaje');
        }
    }
    public function contactanos()
    {
        $institucion=Institucion::first();
        $categorias=Categoria::all();
        return view('inicio.contacto',compact('institucion','categorias','categorias'));
    }
    public function empresa()
    {
        $institucion=Institucion::first();
        $categorias=Categoria::all();
        $empresas=Empresa::all();
        return view('inicio.empresas',compact('institucion','empresas','categorias'));
    }
    public function categoria($id)
    {
        $institucion=Institucion::first();
        $empresas=Empresa::where('categoria_id',$id)->orderBy('id','desc')->get();
        $categoria=Categoria::find($id);
        $categorias = Categoria::all();
        return view('inicio.categorias',compact('institucion','categorias','categoria','empresas'));
    }
    public function actividad()
    {
        $institucion=Institucion::first();
        $categorias=Categoria::all();
        $actividad = Actividad::all();
        return view('inicio.actividades',compact('institucion','actividad','categorias'));
    }
    public function equipo()
    {
        $institucion=Institucion::first();
        $categorias=Categoria::all();
        $equipos = Equipo::all();
        return view('inicio.equipo',compact('institucion','equipos','categorias'));
    }
}
