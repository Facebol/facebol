<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreRegistro extends Model
{
    protected $table="pre_registros";
    protected $fillable=[
        'nombre','apellido','email','celular','usuario_id'
    ];
}
