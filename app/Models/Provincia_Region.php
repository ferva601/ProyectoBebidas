<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia_Region extends Model
{
    protected $table = 'provincia_region';

    protected $fillable = [
    	'provincia', 'region', 'pais_id',
    ]; 

    public function pais(){
    	return $this->belongsTo('App\Models\Pais');
    }

    public function users(){
    	return $this->hasMany('App\Models\User');
    }

    public function productores(){
    	return $this->hasMany('App\Models\Productor');
    }

    public function importadores(){
    	return $this->hasMany('App\Models\Importador');
    }

    public function distribuidores(){
    	return $this->hasMany('App\Models\Distribuidor');
    }

    public function horeca(){
    	return $this->hasMany('App\Models\Horeca');
    }

    public function marcas(){
        return $this->hasMany('App\Models\Marca');
    }

    public function productos(){
        return $this->hasMany('App\Models\Producto');
    }

    public function destinos_ofertas_productores(){
        return $this->hasMany('App\Models\Destino_Oferta_Productor');
    }

    public function destinos_ofertas_importadores(){
        return $this->hasMany('App\Models\Destino_Oferta_Importador');
    }

    public function destinos_ofertas_distribuidores(){
        return $this->hasMany('App\Models\Destino_Oferta_Distribuidor');
    }

    public function demandas_productos_importadores(){
        return $this->hasMany('App\Models\Demanda_Producto_Importador');
    }

    public function demandas_productos_distribuidores(){
        return $this->hasMany('App\Models\Demanda_Producto_Distribuidor');
    }

     public function demandas_importadores(){
        return $this->hasMany('App\Models\Demanda_Importador');
    }

    public function demandas_distribuidores(){
        return $this->hasMany('App\Models\Demanda_Distribuidor');
    }

}
