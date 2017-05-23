<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura_Oferta_Distribuidor extends Model
{
    protected $table = "factura_oferta_distribuidor";

    protected $fillable = [
    	'oferta_distribuidor_id', 'comprador_id', 'tipo_comprador', 'fecha', 'monto', 'forma_pago', 
    ]; 

    public function oferta_distribuidor(){
    	return $this->belongsTo('App\Oferta_Distribuidor');
    }
}
