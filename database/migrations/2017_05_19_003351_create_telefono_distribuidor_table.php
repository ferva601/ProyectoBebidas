<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoDistribuidorTable extends Migration
{
    public function up()
    {
        Schema::create('telefono_distribuidor', function (Blueprint $table){
            $table->increments('id');
            $table->integer('distribuidor_id');
            $table->string('telefono');
            $table->timestamps();

			$table->foreign('distribuidor_id')
      			  ->references('id')->on('distribuidor')
      			  ->onDelete('restrict')
      			  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('telefono_distribuidor');
    }
}
