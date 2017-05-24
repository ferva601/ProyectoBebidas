<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura_Oferta_Importador extends Model
{
    protected $table = "factura_oferta_importador";

    protected $fillable = [
    	'oferta_importador_id', 'comprador_id', 'tipo_comprador', 'fecha', 'monto', 'forma_pago', 
    ]; 

    public function oferta_importador(){
    	return $this->belongsTo('App\Oferta_Importador');
    }

}
