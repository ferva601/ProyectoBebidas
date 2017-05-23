<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoProductorTable extends Migration
{
    public function up()
    {
        Schema::create('telefono_productor', function (Blueprint $table){
            $table->increments('id');
            $table->integer('productor_id');
            $table->string('telefono');
            $table->timestamps();

            $table->foreign('productor_id')
      			  ->references('id')->on('productor')
      			  ->onDelete('restrict')
      			  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telefono_productor');
    }
}
