<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    protected $table = "credito";

    protected $fillable = [
        'plan', 'cantidad_creditos', 'precio', 'descripcion', 
    ];

    public function productores(){
    	return $this->belongsToMany('App\Models\Productor', 'credito_productor')->withPivot('total', 'fecha_compra')->withTimestamps();
    }

    public function importadores(){
    	return $this->belongsToMany('App\Models\Importador', 'credito_importador')->withPivot('total', 'fecha_compra')->withTimestamps();
    }

    public function distribuidores(){
    	return $this->belongsToMany('App\Models\Distribuidor', 'credito_distribuidor')->withPivot('total', 'fecha_compra')->withTimestamps();
    }
}
