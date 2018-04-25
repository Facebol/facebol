<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Institucion extends Model
    {
    protected $table="institucions";
    protected $fillable=['qSomos','frase1','frase2','frase3','trabaja','direccion','celular','telefono','email','facebook','twitter','youtube','instagram','google','imagen','vision','mision','desEmpresa'];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('local')->put($name, \File::get($imagen));
        }
    }
}
