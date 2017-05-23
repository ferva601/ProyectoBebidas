<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono_Usuario extends Model
{
    protected $table = 'telefono_usuario';

    protected $fillable = [
    	'usuario_id', 'telefono',
    ]; 

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
