<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demanda_Distribuidor extends Model
{
    protected $table = "demanda_distribuidor";

    protected $fillable = [
    	'productor_id', 'producto_id', 'pais_id', 'provincia_region_id', 'status', 
    ]; 


    public function producto(){
    	return $this->belongsTo('App\Models\Producto');
    }

    public function productor(){
    	return $this->belongsTo('App\Models\Productor');
    }

    public function pais(){
    	return $this->belongsTo('App\Models\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Models\Provincia_Region');
    }
}
