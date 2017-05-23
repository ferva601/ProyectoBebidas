<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono_Distribuidor extends Model
{
    protected $table = 'telefono_distribuidor';

    protected $fillable = [
    	'distribuidor_id', 'telefono',
    ]; 

    public function distribuidor(){
    	return $this->belongsTo('App\Distribuidor');
    }
}
