<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Importador extends Model
{
    protected $table = "importador";

    protected $fillable = [
        'user_id', 'nombre', 'nombre_seo', 'descripcion', 'direccion', 'codigo_postal', 'pais_id', 'provincia_region_id', 'logo', 
        'persona_contacto', 'email', 'website', 'facebook', 'twitter', 'instagram', 'reclamada', 'latitud', 'longitud', 'estado_datos', 
        'tipo_suscripcion', 'saldo', 'telefono', 'telefono_opcional',
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

    public function productores(){
        return $this->belongsToMany('App\Models\Productor', 'Productor_Importador');
    }

     public function distribuidores(){
        return $this->belongsToMany('App\Models\Distribuidor', 'Importador_Distribuidor');
    }

     public function marcas(){
        return $this->belongsToMany('App\Models\Marca', 'Importador_Marca');
    }

    public function ofertas_importadores(){
    	return $this->hasMany('App\Models\Oferta_Importador');
    }

    public function demandas_productos_importadores(){
    	return $this->hasMany('App\Models\Demanda_Producto_Importador');
    }

    public function creditos(){
    	return $this->belongsToMany('App\Models\Credito', 'credito_importador')->withPivot('total', 'fecha_compra')->withTimestamps();
    }

    public function deducciones_creditos_importadores(){
    	return $this->belongsTo('App\Models\Deduccion_Credito_Importador');
    }
}
