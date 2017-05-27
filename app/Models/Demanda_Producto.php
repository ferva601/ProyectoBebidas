<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demanda_Producto extends Model
{
    protected $table = "demanda_producto";

    protected $fillable = [
    	'producto_id', 'tipo_creador', 'creador_id', 'pais_id', 'provincia_region_id', 'titulo', 'descripcion', 'cantidad_minima', 'cantidad_maxima', 
    	'fecha_creacion', 'fecha_caducidad', 'status',
    ]; 

    public function producto(){
    	return $this->belongsTo('App\Models\Producto');
    }

    public function pais(){
    	return $this->belongsTo('App\Models\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Models\Provincia_Region');
    }
}
