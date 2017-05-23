<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino_Oferta_Importador extends Model
{
    protected $table = "destino_oferta_importador";

     protected $fillable = [
    	'oferta_importador_id', 'pais_id', 'provincia_region_id',
    ]; 

    public function oferta_importador(){
    	return $this->belongsTo('App\Oferta_Importador');
    }

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Provincia_Region');
    }
}
