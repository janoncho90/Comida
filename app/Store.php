<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	 protected $table='stores';

     protected $fillable=['nombre','promedio_calificacion','calle','numero','hora_inicio','hora_cierre','hora_almuerzo','hora_dalmuerzo','dia_inicio','dia_termino','cant_favoritos','user_id'];

     public function user()
     {
     	return $this->belongsTo('App\User');
     }

      public function products()
    {
       return $this->hasMany('App\Product');
    }

      public function comments_users()
    {
       return $this->hasMany('App\Comment_Store');
    }

     public function califications_users()
    {
       return $this->hasMany('App\Calification_Store');
    }

    public function deliverymans_users()
    {
        return $this->hasMany('App\Deliveryman_Store');
    }
}
