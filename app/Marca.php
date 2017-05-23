<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = "marca";

     protected $fillable = [
        'productor_id', 'creador_id', 'tipo_creador', 'nombre', 'nombre_seo', 'descripcion', 'pais_id', 'provincia_region_id', 'logo',
        'website', 'reclamada',
    ];

    public function productor(){
    	return $this->belongsTo('App\Productor');
    }

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Provincia_Region');
    }

    public function importadores(){
        return $this->belongsToMany('App\Importador', 'Importador_Marca');
    }

    public function distribuidores(){
        return $this->belongsToMany('App\Distribuidor', 'Distribuidor_Marca');
    }

     public function productos(){
        return $this->hasMany('App\Producto');
    }
}
