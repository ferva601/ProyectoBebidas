<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandaProductoDistribuidorTable extends Migration
{
    public function up()
    {
        Schema::create('demanda_producto_distribuidor', function(Blueprint $table){
            $table->increments('id');
            $table->integer('producto_id');
            $table->integer('distribuidor_id');
            $table->integer('pais_id');
            $table->integer('provincia_region_id');
            $table->string('titulo');
            $table->text('descripcion');
            $table->integer('cantidad_minima');
            $table->integer('cantidad_maxima');
            $table->date('fecha_creacion');
            $table->date('fecha_caducidad');
            $table->timestamps();

            $table->foreign('producto_id')
                  ->references('id')->on('producto')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('distribuidor_id')
                  ->references('id')->on('distribuidor')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('pais_id')
                  ->references('id')->on('pais')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('provincia_region_id')
                  ->references('id')->on('provincia_region')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('demanda_producto_distribuidor');
    }
}
