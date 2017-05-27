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
    	return $this->belongsToMany('App\Models\Productor', 'productor_credito')->withPivot('total', 'fecha_compra')->withTimestamps();
    }

    public function importadores(){
    	return $this->belongsToMany('App\Models\Importador', 'importador_credito')->withPivot('total', 'fecha_compra')->withTimestamps();
    }

    public function distribuidores(){
    	return $this->belongsToMany('App\Models\Distribuidor', 'distribuidor_credito')->withPivot('total', 'fecha_compra')->withTimestamps();
    }

    public function horecas(){
        return $this->belongsToMany('App\Models\Horeca', 'horeca_credito')->withPivot('total', 'fecha_compra')->withTimestamps();
    }
}
