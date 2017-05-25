<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demanda_Importador extends Model
{
    protected $table = "demanda_importador";

    protected $fillable = [
    	'productor_id', 'producto_id', 'pais_id', 'provincia_region_id', 'status', 
    ]; 


    public function producto(){
    	return $this->belongsTo('App\Producto');
    }

    public function productor(){
    	return $this->belongsTo('App\Productor');
    }

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Provincia_Region');
    }
}
