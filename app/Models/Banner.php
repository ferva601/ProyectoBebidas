<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "banner";

    protected $fillable = [
        'creador_id', 'tipo_creador', 'url_banner', 'descripcion', 
    ];

    public function banner(){
    	return $this->hasMany('App\Impresion_Banner');
    }
}
