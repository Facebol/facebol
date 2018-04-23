<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreRegistro extends Model
{
    protected $table="pre_registros";
    protected $fillable=[
        'nombre','apellido','email','celular','usuario_id','imagen'
    ];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('local')->put($name, \File::get($imagen));
        }
    }
}
