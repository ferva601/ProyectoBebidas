<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoUsuarioTable extends Migration
{

    public function up()
    {
        Schema::create('telefono_usuario', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('telefono');
            $table->timestamps();

            $table->foreign('user_id')
      			  ->references('id')->on('user')
      			  ->onDelete('restrict')
      			  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telefono_usuario');
    }
}
