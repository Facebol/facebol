<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Empresa extends Model
{
    protected $table="empresas";
    protected $fillable=['nombre','descripcion','telefono','email','facebook','direccion','promocion','descuento','horario','web','categoria_id','imagen','usuario_id','ciudad_id','activo'];
    public function setImagenAttribute($imagen){
        if(! empty($imagen)){
              $name = Carbon::now()->second.$imagen->getClientOriginalName();
              $this->attributes['imagen'] = $name;
              \Storage::disk('local')->put($name, \File::get($imagen));
        }
    }
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    } 
    
}
