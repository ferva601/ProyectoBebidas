<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    protected $table = "productor";

    protected $fillable = [
        'user_id', 'nombre', 'nombre_seo', 'descripcion', 'direccion', 'codigo_postal', 'pais_id', 'provincia_region_id', 'logo', 'persona_contacto',
        'email', 'website', 'facebook', 'twitter', 'instagram', 'reclamada', 'latitud', 'longitud', 'estado_datos', 'tipo_suscripcion', 'saldo',
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
    	return $this->hasMany('App\Telefono_Productor');
    }

    public function importadores(){
        return $this->belongsToMany('App\Importador', 'Productor_Importador');
    }

    public function distribuidores(){
        return $this->belongsToMany('App\Distribuidor', 'Productor_Distribuidor');
    }

    public function marcas(){
        return $this->hasMany('App\Marca');
    }

    public function ofertas_productores(){
        return $this->hasMany('App\Oferta_Productor');
    }

    public function demandas_importadores(){
        return $this->hasMany('App\Demanda_Importador');
    }

    public function demandas_distribuidores(){
        return $this->hasMany('App\Demanda_Distribuidor');
    }

    public function creditos(){
    	return $this->belongsToMany('App\Credito', 'credito_productor')->withPivot('total', 'fecha_compra')->withTimestamps();
    }

    public function deducciones_creditos_productores(){
        return $this->hasMany('App\Deduccion_Credito_Productor');
    }
}
