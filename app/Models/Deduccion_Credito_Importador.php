<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deduccion_Credito_Importador extends Model
{
    protected $table = "deduccion_credito_importador";

    protected $fillable = [
        'importador_id', 'fecha_compra', 'descripcion', 'cantidad_creditos', 
    ];

    public function importador(){
    	return $this->belongsTo('App\Importador');
    }
}
