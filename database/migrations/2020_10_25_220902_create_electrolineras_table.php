<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectrolinerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electrolineras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('coordenadas');
            $table->integer('capacidad');

            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');
            
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
        Schema::dropIfExists('electrolineras');
    }
}
