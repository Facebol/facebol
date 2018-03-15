<?php

use Illuminate\Database\Seeder;
use App\User;
class seedUsuario extends Seeder
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
                'nombre'=>'gabriel angel',
                'apellido'=>'Pinto',
                'direccion'=>'calle1',
                'celular'=>76518845,
                'email'=>'angel22586310@gmail.com',
                'password'=>\Hash::make('123456'),
                'imagen'=>'perfil.jpg',
                'codigo'=>str_random(25),
                'tipo'=>'administrador',
                'activo'=>1,
                'ciudad_id'=>1,
            ],
            [
                'nombre'=>'luis ',
                'apellido'=>'alvarado',
                'direccion'=>'calle3',
                'celular'=>76518535,
                'email'=>'luis@gmail.com',
                'password'=>\Hash::make('123456'),
                'imagen'=>'perfil.jpg',
                'codigo'=>str_random(25),
                'tipo'=>'usuario',
                'activo'=>1,
                'ciudad_id'=>1,
            ],

        );
        User::insert($datos);
    }
}
