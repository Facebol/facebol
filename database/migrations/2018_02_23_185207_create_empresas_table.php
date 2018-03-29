<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('telefono');
            $table->string('email')->unique();
            $table->string('facebook')->unique();
            $table->string('web')->unique();
            $table->string('imagen')->unique();
            $table->integer('usuario_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('ciudad_id')->references('id')->on('ciudads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
