<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "user";

    protected $fillable = [
        'name', 'email', 'password', 'nombre', 'apellido', 'direccion', 'codigo_postal', 'pais_id', 'provincia_region_id', 'avatar', 'estado_datos',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function provincia_region(){
    	return $this->belongsTo('App\Provincia_Region');
    }

    public function telefonos(){
        return $this->hasMany('App\Telefono_Usuario.php');
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

    public function horecas(){
    	return $this->hasMany('App\Horeca');
    }

    public function opiniones(){
    	return $this->hasMany('App\Opinion');
    }
}
