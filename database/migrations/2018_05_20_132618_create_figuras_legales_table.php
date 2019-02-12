<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFigurasLegalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figuras_legales', function (Blueprint $table) {
              $table->increments('id');
              $table->string('nombre')->unique();
              $table->integer('provincia_id')->unsigned();
              $table->string('slug')->unique();
              $table->timestamps();

              $table->foreign('provincia_id')->references('id')->on('provincias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('figuras_legales');
    }
}
