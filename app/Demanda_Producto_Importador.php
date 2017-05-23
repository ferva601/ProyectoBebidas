<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demanda_Producto_Importador extends Model
{
    protected $table = "demanda_producto_importador";

    protected $fillable = [
    	'producto_id', 'importador_id', 'pais_id', 'provincia_region_id', 'titulo', 'descripcion', 'cantidad_minima', 'cantidad_maxima', 
    	'fecha_creacion', 'fecha_caducidad',
    ]; 

    public function producto(){
    	return $this->belongsTo('App\Producto');
    }

    public function importador(){
    	return $this->belongsTo('App\Importador');
    }

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Provincia_Region');
    }

}
