<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oferta_Distribuidor extends Model
{
    protected $table = "oferta_distribuidor";

     protected $fillable = [
        'producto_id', 'distribuidor_id', 'titulo', 'descripcion', 'precio_unitario', 'precio_lote', 'cantidad_producto', 'cantidad_caja',
        'cantidad_minima', 'envio', 'costo_envio',
    ];

    public function producto(){
    	return $this->belongsTo('App\Models\Producto');
    }

    public function distribuidor(){
    	return $this->belongsTo('App\Models\Distribuidor');
    }

    public function destinos_ofertas_distribuidores(){
    	return $this->hasMany('App\Models\Destino_Oferta_Distribuidor');
    }

    public function facturas_ofertas_distribuidores(){
    	return $this->hasMany('App\Models\Factura_Oferta_Distribuidor');
    }
}
