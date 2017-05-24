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
    	return $this->belongsTo('App\Pais');
    }

    public function users(){
    	return $this->hasMany('App\User');
    }

    public function productores(){
    	return $this->hasMany('App\Productor');
    }

    public function importadores(){
    	return $this->hasMany('App\Importador');
    }

    public function distribuidores(){
    	return $this->hasMany('App\Distribuidor');
    }

    public function horeca(){
    	return $this->hasMany('App\Horeca');
    }

    public function marcas(){
        return $this->hasMany('App\Marca');
    }

    public function productos(){
        return $this->hasMany('App\Producto');
    }

    public function destinos_ofertas_productores(){
        return $this->hasMany('App\Destino_Oferta_Productor');
    }

    public function destinos_ofertas_importadores(){
        return $this->hasMany('App\Destino_Oferta_Importador');
    }

    public function destinos_ofertas_distribuidores(){
        return $this->hasMany('App\Destino_Oferta_Distribuidor');
    }

    public function demandas_productos_importadores(){
        return $this->hasMany('App\Demanda_Producto_Importador');
    }

    public function demandas_productos_distribuidores(){
        return $this->hasMany('App\Demanda_Producto_Distribuidor');
    }

     public function demandas_importadores(){
        return $this->hasMany('App\Demanda_Importador');
    }

    public function demandas_distribuidores(){
        return $this->hasMany('App\Demanda_Distribuidor');
    }

}
