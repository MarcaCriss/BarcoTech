<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('botes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('id_propietario');
            $table->unsignedBiginteger('id_equipo');
            $table->foreign('id_propietario')->references('id')->on('propietario');
            $table->foreign('id_equipo')->references('id')->on('equipo');
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
        Schema::dropIfExists('botes');
    }
}
