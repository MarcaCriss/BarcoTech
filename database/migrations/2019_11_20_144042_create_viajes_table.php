<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('id_cliente');
            $table->unsignedBiginteger('id_tripulante');
            $table->integer('costo_viaje');
            $table->string('ruta');
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->foreign('id_tripulante')->references('id')->on('tripulacion');
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
        Schema::dropIfExists('viajes');
    }
}
