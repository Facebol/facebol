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
            $table->text('descripcion');
            $table->integer('telefono')->nullable();
            $table->string('email')->unique();
            $table->string('facebook')->unique();
            $table->string('direccion')->nullable();
            $table->string('promocion')->nullable();
            $table->string('descuento')->nullable();
            $table->string('video')->nullable();
            $table->string('horario');
            $table->boolean('activo');
            $table->string('web')->unique()->nullable();
            $table->integer('categoria_id')->unsigned();
            $table->string('imagen')->unique();
            $table->string('cod_face');
            $table->integer('usuario_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
