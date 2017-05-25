<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Importador extends Model
{
    protected $table = "importador";

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
    	return $this->hasMany('App\Telefono_Importador');
    }

    public function productores(){
        return $this->belongsToMany('App\Productor', 'Productor_Importador');
    }

     public function distribuidores(){
        return $this->belongsToMany('App\Distribuidor', 'Importador_Distribuidor');
    }

     public function marcas(){
        return $this->belongsToMany('App\Marca', 'Importador_Marca');
    }

    public function ofertas_importadores(){
    	return $this->hasMany('App\Oferta_Importador');
    }

    public function demandas_productos_importadores(){
    	return $this->hasMany('App\Demanda_Producto_Importador');
    }

    public function creditos(){
    	return $this->belongsToMany('App\Credito', 'credito_importador')->withPivot('total', 'fecha_compra')->withTimestamps();
    }

    public function deducciones_creditos_importadores(){
    	return $this->belongsTo('App\Deduccion_Credito_Importador');
    }
}
