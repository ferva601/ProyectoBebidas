<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoHorecaTable extends Migration
{
    public function up()
    {
        Schema::create('telefono_horeca', function (Blueprint $table){
            $table->increments('id');
            $table->integer('horeca_id');
            $table->string('telefono');
            $table->timestamps();

            $table->foreign('horeca_id')
      			  ->references('id')->on('horeca')
      			  ->onDelete('restrict')
      			  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telefono_horeca');
    }
}
