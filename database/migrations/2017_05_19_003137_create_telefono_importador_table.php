<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoImportadorTable extends Migration
{
    public function up()
    {
        Schema::create('telefono_importador', function (Blueprint $table){
            $table->increments('id');
            $table->integer('importador_id');
            $table->string('telefono');
            $table->timestamps();

            $table->foreign('importador_id')
      			  ->references('id')->on('importador')
      			  ->onDelete('restrict')
      			  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telefono_importador');
    }
}
