<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Institucion extends Model
{
    protected $table="institucions";
    protected $fillable=['nombre','descripcion','direccion','telefono','email','facebook','twiter','imagen','vision','mision'];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('local')->put($name, \File::get($imagen));
        }
    }
}
