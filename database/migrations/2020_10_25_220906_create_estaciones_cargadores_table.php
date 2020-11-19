<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstacionesCargadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estaciones_has_cargadores', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('estacion_id');
            $table->foreign('estacion_id')->references('id')->on('estaciones');

            $table->unsignedBigInteger('cargador_id');
            $table->foreign('cargador_id')->references('id')->on('estaciones');

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
        Schema::dropIfExists('estacion_cargadors');
    }
}
