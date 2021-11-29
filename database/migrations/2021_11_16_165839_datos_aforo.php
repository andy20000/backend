<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosAforo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_aforo', function (Blueprint $table) {

        

            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->string('clima',50);            
            $table->string('observador',50);
            $table->string('sitio_conteo',50);
            $table->string('sentido_transito',50);            
            $table->string('supervisor',50);
            $table->string('id_carril',50);

         
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
        Schema::dropIfExists('datos_aforo');
    }
}
