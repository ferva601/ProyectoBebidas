<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaOfertaProductorTable extends Migration
{

    public function up()
    {
        Schema::create('factura_oferta_productor', function (Blueprint $table){
            $table->increments('id');
            $table->integer('oferta_productor_id');
            $table->integer('comprador_id');
            $table->enum('tipo_comprador', ['Importador', 'Distribuidor', 'Horeca']);
            $table->date('fecha');
            $table->double('monto', 6, 2);
            $table->string('forma_pago');
            $table->timestamps();


            $table->foreign('oferta_productor_id')
                  ->references('id')->on('oferta_productor')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('factura_oferta_productor');
    }
}
