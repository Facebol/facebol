<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ciudad_id','nombre', 'apellido','ci','direccion','celular','email', 'password','imagen','codigo','tipo','activo','cod_face'   
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('local')->put($name, \File::get($imagen));
        }
    }
    public function setPasswordAttribute($valor){
    if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
}
