<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaOfertaDistribuidorTable extends Migration
{
    public function up()
    {
        Schema::create('factura_oferta_distribuidor', function (Blueprint $table){
            $table->increments('id');
            $table->integer('oferta_distribuidor_id');
            $table->integer('comprador_id');
            $table->date('fecha');
            $table->double('monto', 6, 2);
            $table->string('forma_pago');
            $table->timestamps();

            $table->foreign('oferta_distribuidor_id')
                  ->references('id')->on('oferta_distribuidor')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('factura_oferta_distribuidor');
    }
}
