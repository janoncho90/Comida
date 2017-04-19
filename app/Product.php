<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';

    protected $fillable=['nombre','descripcion','precio','promedio_calificacion','cant_favoritos','store_id'];

    public function store()
    {
    	return $this->belognsTo('App\Store');
    }
}
