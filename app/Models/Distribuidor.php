<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribuidor extends Model
{
    protected $table = "distribuidor";

    protected $fillable = [
        'user_id', 'nombre', 'nombre_seo', 'descripcion', 'direccion', 'codigo_postal', 'pais_id', 'provincia_region_id', 'logo', 'persona_contacto',
        'email', 'website', 'facebook', 'twitter', 'instagram', 'reclamada', 'latitud', 'longitud', 'estado_datos', 'tipo_suscripcion', 'saldo',
    ];

    public function user(){
    	return $this->belongsTo('App\Models\User');
    }

    public function pais(){
    	return $this->belongsTo('App\Models\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Models\Provincia_Region');
    }

    public function telefonos(){
    	return $this->hasMany('App\Models\Telefono_Distribuidor');
    }

    public function productores(){
        return $this->belongsToMany('App\Models\Productor', 'Productor_Distribuidor');
    }

    public function importadores(){
        return $this->belongsToMany('App\Models\Importador', 'Importador_Distribuidor');
    }

    public function marcas(){
        return $this->belongsToMany('App\Models\Marca', 'Distribuidor_Marca');
    }

    public function ofertas_distribuidores(){
    	return $this->hasMany('App\Models\Oferta_Distribuidor');
    }

    public function demandas_prodcutos_distribuidores(){
    	return $this->hasMany('App\Models\Demanda_Producto_Distribuidor');
    }

    public function creditos(){
    	return $this->belongsToMany('App\Models\Credito', 'credito_distribuidor')->withPivot('total', 'fecha_compra')->withTimestamps();
    }

     public function deducciones_creditos_distribuidores(){
    	return $this->belongsTo('App\Models\Deduccion_Credito_Distribuidor');
    }

}
