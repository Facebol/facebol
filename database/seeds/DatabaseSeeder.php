<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(seedPais::class);
        $this->call(seedCiudad::class);
        $this->call(seedUsuario::class);
        $this->call(seedCategoria::class);
        $this->call(seedInstitucion::class);
        $this->call(seedEmpresa::class);
    }
}
