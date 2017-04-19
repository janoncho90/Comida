<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Rol extends Model
{
    protected $table='users_rols';

    protected $fillable=['user_id','rol_id'];
	
    public function user()
    {
    	return $this->belongsTo('App\User','id','user_id');
    }

     public function rol()
    {
    	return $this->belongsTo('App\Rol','id','rol_id');
    }
}
