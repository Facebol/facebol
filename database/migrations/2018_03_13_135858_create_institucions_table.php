<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qSomos');
            $table->string('frase1');
            $table->string('frase2');
            $table->string('frase3');
            $table->string('trabaja');
            $table->string('direccion');
            $table->integer('celular');
            $table->integer('telefono');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('instagram');
            $table->string('google');
            $table->string('imagen');
            $table->string('vision');
            $table->string('mision');
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
        Schema::dropIfExists('institucions');
    }
}
