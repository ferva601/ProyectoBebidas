<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase_Bebida extends Model
{
    protected $table = "clase_bebida";

    protected $fillable = [
    	'bebida_id', 'clase', 'pais_id', 'caracteristicas',
    ]; 

    public function bebida(){
    	return $this->hasMany('App\Bebida');
    }

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

     public function productos(){
        return $this->hasMany('App\Producto');
    }
}
