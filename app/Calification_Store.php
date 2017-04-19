<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calification_Store extends Model
{
    protected $table='califications_stores';

    protected $fillable=['valor','','user_id','store_id'];

     public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function tienda()
    {
       return $this->belongsTo('App\Store');
    }
}
