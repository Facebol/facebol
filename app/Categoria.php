<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
     protected $table='categorias';
    protected $fillable=['nombre','descripcion','imagen'];

     public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('local')->put($name, \File::get($imagen));
        }
    }
}


