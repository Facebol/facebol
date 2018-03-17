<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Empresa extends Model
{
    protected $table = 'empresas';
    protected $fillable = ['nombre','descripcion','telefono','email','facebook','web','imagen','ciudad_id'];

    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('local')->put($name, \File::get($imagen));
        }
    } 
}
