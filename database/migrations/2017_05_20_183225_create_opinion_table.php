<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpinionTable extends Migration
{
    public function up()
    {
        Schema::create('opinion', function (Blueprint $table){
        	$table->increments('id');
        	$table->integer('user_id');
        	$table->integer('producto_id');
        	$table->integer('valoracion');
        	$table->string('comentario');
        	$table->date('fecha');
        	$table->enum('editada', ['Si', 'No'])->default('No');
        	$table->date('fecha_ultima_edicion');
          $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')->on('user')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('producto_id')
                  ->references('id')->on('producto')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('opinion');
    }
}
