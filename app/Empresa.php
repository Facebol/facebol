<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table="empresas";
    protected $fillable=['ciudad_id','nombre','descripcion','telefono','email','facebook','web','imagen'];
    ];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('local')->put($name, \File::get($imagen));
        }
    }   
}
