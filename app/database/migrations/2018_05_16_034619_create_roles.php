<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Crea tabla roles

        Schema::create('roles', function(Blueprint $table){
            $table->increments('id_rol');
            $table->string('rol', 100);
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
        //Dropea la tabla roles

        Schema::dropIfExists('roles');
    }
}
