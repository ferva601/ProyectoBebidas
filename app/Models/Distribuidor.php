<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribuidor extends Model
{
    protected $table = "distribuidor";

    protected $fillable = [
        'usuario_id', 'nombre', 'nombre_seo', 'descripcion', 'direccion', 'codigo_postal', 'pais_id', 'provincia_region_id', 'logo', 'persona_contacto',
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
    	return $this->hasMany('App\Telefono_Distribuidor');
    }

    public function productores(){
        return $this->belongsToMany('App\Productor', 'Productor_Distribuidor');
    }

    public function importadores(){
        return $this->belongsToMany('App\Importador', 'Importador_Distribuidor');
    }

    public function marcas(){
        return $this->belongsToMany('App\Marca', 'Distribuidor_Marca');
    }

    public function ofertas_distribuidores(){
    	return $this->hasMany('App\Oferta_Distribuidor');
    }

    public function demandas_prodcutos_distribuidores(){
    	return $this->hasMany('App\Demanda_Producto_Distribuidor');
    }

    public function creditos(){
    	return $this->belongsToMany('App\Credito', 'credito_distribuidor')->withPivot('total', 'fecha_compra')->withTimestamps();
    }

     public function deducciones_creditos_distribuidores(){
    	return $this->belongsTo('App\Deduccion_Credito_Distribuidor');
    }

}
