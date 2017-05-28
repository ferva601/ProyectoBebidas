<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $table = "suscripcion";

    protected $fillable = ['suscripcion', 'descripcion', 'precio',]; 

    public function productores(){
    	return $this->hasMany('App\Models\Productor');
    }

     public function importadores(){
    	return $this->hasMany('App\Models\Importador');
    }

    public function distribuidores(){
    	return $this->hasMany('App\Models\Distribuidor');
    }
}
