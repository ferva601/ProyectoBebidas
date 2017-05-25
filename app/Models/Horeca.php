<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horeca extends Model
{
     protected $table = "horeca";

    protected $fillable = [
        'user_id', 'nombre', 'nombre_seo', 'descripcion', 'direccion', 'codigo_postal', 'pais_id', 'provincia_region_id', 'logo', 'persona_contacto',
        'email', 'website', 'facebook', 'twitter', 'instagram', 'reclamada', 'latitud', 'longitud', 'estado_datos', 'tipo_horeca', 'saldo',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Provincia_Region');
    }

    public function telefonos(){
    	return $this->hasMany('App\Telefono_Horeca');
    }
}
