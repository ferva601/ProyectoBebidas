<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura_Oferta_Productor extends Model
{
     protected $table = "factura_oferta_productor";

    protected $fillable = [
    	'oferta_productor_id', 'comprador_id', 'tipo_comprador', 'fecha', 'monto', 'forma_pago', 
    ]; 

    public function oferta_productor(){
    	return $this->belongsTo('App\Oferta_Productor');
    }

}
