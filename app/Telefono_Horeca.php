<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono_Horeca extends Model
{
    protected $table = 'telefono_horeca';

    protected $fillable = [
    	'horeca_id', 'telefono',
    ]; 

    public function horeca(){
    	return $this->belongsTo('App\Horeca');
    }
}
