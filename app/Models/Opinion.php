<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
     protected $table = "opinion";

    protected $fillable = [
        'usuario_id', 'producto_id', 'valoracion', 'comentario', 'fecha', 'editada', 'fecha_ultima_edicion',
    ];

    public function user(){
    	return $this->belongsTo('App\Models\User');
    }

    public function producto(){
    	return $this->belongsTo('App\Models\Producto');
    }
}
