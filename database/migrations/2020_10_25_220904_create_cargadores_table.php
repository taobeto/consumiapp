<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargadores', function (Blueprint $table) {
            $table->id();
            $table->float('voltaje');
            $table->float('corriente');
            $table->float('potencia');
            $table->text('tipo');
            $table->text('modelo');

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
        Schema::dropIfExists('cargadors');
    }
}
