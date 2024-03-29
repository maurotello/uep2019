<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexosProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexos_proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();
            $table->date('fecha');
            $table->string('file');
            $table->string('icon');
            $table->string('nombre_archivo')->unique();
            $table->string('slug')->unique();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anexos_proyectos');
    }
}
