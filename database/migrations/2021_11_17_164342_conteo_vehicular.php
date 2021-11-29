<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConteoVehicular extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteo_vehicular', function (Blueprint $table) {
            $table->id();
            $table->integer('autos');
            $table->integer('mio_articulados');
            $table->integer('mio_padrones');
            $table->integer('mio_alimentador');
            $table->integer('buses');
            $table->integer('busetas');
            $table->integer('motos');
            $table->integer('caminones_c2p');
            $table->integer('caminones_c2g');
            $table->integer('caminones_c3');
            $table->integer('camiones_c4');
            $table->integer('camiones_c5');
            $table->integer('camiones_c5_mayoresque');
            $table->integer('bicicletas');
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
        Schema::dropIfExists('conteo_vehicular');
    }
}
