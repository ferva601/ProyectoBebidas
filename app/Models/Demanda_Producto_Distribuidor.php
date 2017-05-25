<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demanda_Producto_Distribuidor extends Model
{
     protected $table = "demanda_producto_distribuidor";

    protected $fillable = [
    	'producto_id', 'distribuidor_id', 'pais_id', 'provincia_region_id', 'titulo', 'descripcion', 'cantidad_minima', 'cantidad_maxima', 
    	'fecha_creacion', 'fecha_caducidad',
    ]; 

    public function producto(){
    	return $this->belongsTo('App\Models\Producto');
    }

    public function distribuidor(){
    	return $this->belongsTo('App\Models\Distribuidor');
    }

    public function pais(){
    	return $this->belongsTo('App\Models\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Models\Provincia_Region');
    }
}
