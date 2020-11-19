<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectrolinerasEstacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electrolineras_has_estaciones', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('electrolinera_id');
            $table->foreign('electrolinera_id')->references('id')->on('electrolineras');

            $table->unsignedBigInteger('estacion_id');
            $table->foreign('estacion_id')->references('id')->on('estaciones');

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
        Schema::dropIfExists('electroliner_estacions');
    }
}
