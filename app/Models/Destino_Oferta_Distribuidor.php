<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destino_Oferta_Distribuidor extends Model
{
    protected $table = "destino_oferta_distribuidor";

     protected $fillable = [
    	'oferta_distribuidor_id', 'pais_id', 'provincia_region_id',
    ]; 

    public function oferta_distribuidor(){
    	return $this->belongsTo('App\Models\Oferta_Distribuidor');
    }

    public function pais(){
    	return $this->belongsTo('App\Models\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Models\Provincia_Region');
    }
}
