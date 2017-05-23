<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino_Oferta_Distribuidor extends Model
{
    protected $table = "destino_oferta_distribuidor";

     protected $fillable = [
    	'oferta_distribuidor_id', 'pais_id', 'provincia_region_id',
    ]; 

    public function oferta_distribuidor(){
    	return $this->belongsTo('App\Oferta_Distribuidor');
    }

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Provincia_Region');
    }
}
