<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono_Productor extends Model
{
    protected $table = 'telefono_productor';

    protected $fillable = [
    	'productor_id', 'telefono',
    ]; 

    public function productor(){
    	return $this->belongsTo('App\Productor');
    }
}
