<?php

use Illuminate\Database\Seeder;
use App\Institucion;
use Carbon\Carbon;
class seedInstitucion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=array(
            [
                'qSomos'=>'',
                'frase1'=>'',
                'frase2'=>'',
                'frase3'=>'',
                'trabaja'=>'',
                'direccion'=>'',
                'celular'=>'',
                'telefono'=>'',
                'email'=>'',
                'facebook'=>'',
                'twitter'=>'',
                'youtube'=>'',
                'instagram'=>'',
                'google'=>'',
                'imagen'=>'',
                'vision'=>'',
                'mision'=>'',
                'created_at'=>Carbon::now(),
                'update_at'=>Carbon::now(),
            ]
        );
        Institucion::insert($datos);
    }
}
