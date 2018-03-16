<?php

use Illuminate\Database\Seeder;
use App\Institucion;
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
                'nombre'=>'facebol',
                'descripcion'=>'Somos una empresa boliviana legalmente establecida que se dedica a la administracion, marketing y venta de servicios para empresas y negocios de todo el mundo.',
                'mision'=>'Brindar a las personas la oportunidad de aumentar sus ingresos e impulsar su educacion e inteligencia financiera.',
                'vision'=>'Ser una de las empresas Bolivianas mas reconocidas a nivel nacional y tener una fuerte presencia a nivel Internacional.',
                'direccion'=>'calle1',
                'email'=>'facebol@facebolsrl.com',
                'imagen'=>'facebol-logo.png',
                'facebook'=>'facebook',
                'twitter'=>'twitter',
                'imagen_slider'=>'slider4.jpg',
                'telefono'=>345678234,
            ]
        );
        Institucion::insert($datos);
    }
}
