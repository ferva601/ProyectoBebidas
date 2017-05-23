<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta_Productor extends Model
{
    protected $table = "oferta_productor";

     protected $fillable = [
        'producto_id', 'productor_id', 'titulo', 'descripcion', 'precio_unitario', 'precio_lote', 'cantidad_producto', 'cantidad_caja',
        'cantidad_minima', 'envio', 'costo_envio', 'visible_importadores', 'visible_distribuidores', 'visible_horecas',
    ];

    public function producto(){
    	return $this->belongsTo('App\Producto');
    }

    public function productor(){
    	return $this->belongsTo('App\Productor');
    }

    public function destinos_ofertas_productores(){
    	return $this->hasMany('App\Destino_Oferta_Productor');
    }

    public function facturas_ofertas_productores(){
    	return $this->hasMany('App\Factura_Oferta_Productor');
    }
}
