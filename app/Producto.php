<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
     protected $table="producto";
    protected $fillable=['nombre','descripcion','precio','imagen','activo','descuento','tipo','comision'];

    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('local')->put($name, \File::get($imagen));
        }
    }
}
