<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertaProductorTable extends Migration
{
    public function up()
    {
        Schema::create('oferta_productor', function (Blueprint $table){
        	$table->increments('id');
        	$table->integer('producto_id');
            $table->integer('productor_id');
        	$table->string('titulo');
        	$table->text('descripcion');
        	$table->double('precio_unitario', 6, 2);
        	$table->double('precio_lote', 6, 2 );
        	$table->integer('cantidad_producto');
        	$table->integer('cantidad_caja');
        	$table->integer('cantidad_minima');
        	$table->enum('envio', ['Si', 'No']);
        	$table->double('costo_envio', 6, 2)->nullable();
          $table->enum('visible_importadores', ['Si', 'No']);
          $table->enum('visible_distribuidores', ['Si', 'No']);
          $table->enum('visible_horecas', ['Si', 'No']);
          $table->timestamps();

            $table->foreign('producto_id')
                  ->references('id')->on('producto')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('productor_id')
                  ->references('id')->on('productor')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });

        Schema::create('destino_oferta_productor', function (Blueprint $table){
            $table->increments('id');
            $table->integer('oferta_productor_id');
            $table->integer('pais_id');
            $table->integer('provincia_region_id');
            $table->timestamps();

            $table->foreign('pais_id')
                  ->references('id')->on('pais')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('provincia_region_id')
                  ->references('id')->on('provincia_region')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('oferta_productor_id')
                  ->references('id')->on('oferta_productor')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('oferta_productor');
        Schema::dropIfExists('destino_oferta_productor');
    }
}
