<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Crea tabla preguntas

        Schema::create('preguntas', function(Blueprint $table){
            $table->increments('id_pregunta');
            $table->string('pregunta', 100);
            $table->boolean('respondida')->default(false);
            $table->text('respuesta')->nullable();
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
        //Dropea la tabla preguntas

        Schema::dropIfExists('preguntas');
    }
}
