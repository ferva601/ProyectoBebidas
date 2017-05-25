<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefono_Importador extends Model
{
    protected $table = 'telefono_importador';

    protected $fillable = [
    	'importador_id', 'telefono',
    ]; 

    public function importador(){
    	return $this->belongsTo('App\Importador');
    }
}
