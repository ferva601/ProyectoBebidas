<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Impresion_Banner extends Model
{
    protected $table = "banner";

    protected $fillable = [
        'banner_id', 'fecha_inicio', 'fecha_fin', 'cantidad_click', 'pais_id', 
    ];

    public function banner(){
    	return $this->belongsTo('App\Banner');
    }

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }
}
