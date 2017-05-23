<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    public function up()
    {
        Schema::create('banner', function (Blueprint $table){
            $table->increments('id');
            $table->integer('creador_id');
            $table->enum('tipo_creador', ['Productor', 'Importador', 'Distribuidor', 'Horeca']);
            $table->string('url_banner');
            $table->text('descripcion');
            $table->timestamps();
        });

        Schema::create('impresion_banner', function (Blueprint $table){
            $table->increments('id');
            $table->integer('banner_id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('cantidad_click');
            $table->integer('pais_id');
            $table->timestamps();

            $table->foreign('banner_id')
                  ->references('id')->on('banner')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('pais_id')
                  ->references('id')->on('pais')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('banner');
        Schema::dropIfExists('impresion_banner');
    }
}
