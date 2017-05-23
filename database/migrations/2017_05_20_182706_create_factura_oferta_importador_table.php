<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaOfertaImportadorTable extends Migration
{

    public function up()
    {
         Schema::create('factura_oferta_importador', function (Blueprint $table){
            $table->increments('id');
            $table->integer('oferta_importador_id');
            $table->integer('comprador_id');
            $table->enum('tipo_comprador', ['Distribuidor', 'Horeca']);
            $table->date('fecha');
            $table->double('monto', 6, 2);
            $table->string('forma_pago');
            $table->timestamps();


            $table->foreign('oferta_importador_id')
                  ->references('id')->on('oferta_importador')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('factura_oferta_importador');
    }
}
