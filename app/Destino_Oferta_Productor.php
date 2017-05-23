<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino_Oferta_Productor extends Model
{
    protected $table = "destino_oferta_productor";

     protected $fillable = [
    	'oferta_productor_id', 'pais_id', 'provincia_region_id',
    ]; 

    public function oferta_productor(){
    	return $this->belongsTo('App\Oferta_Productor');
    }

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Provincia_Region');
    }

}
