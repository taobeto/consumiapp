<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estaciones', function (Blueprint $table) {
            $table->id();
            $table->text('codigo');
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
        Schema::dropIfExists('estacions');
    }
}
