<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta_Importador extends Model
{
    protected $table = "oferta_importador";

     protected $fillable = [
        'producto_id', 'importador_id', 'titulo', 'descripcion', 'precio_unitario', 'precio_lote', 'cantidad_producto', 'cantidad_caja',
        'cantidad_minima', 'envio', 'costo_envio', 'visible_distribuidores', 'visible_horecas',
    ];

    public function producto(){
    	return $this->belongsTo('App\Producto');
    }

    public function importador(){
    	return $this->belongsTo('App\Importador');
    }

    public function destinos_ofertas_importadores(){
    	return $this->hasMany('App\Destino_Oferta_Importador');
    }

    public function facturas_ofertas_importadores(){
    	return $this->hasMany('App\Factura_Oferta_Importador');
    }
}
