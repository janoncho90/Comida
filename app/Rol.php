<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
     protected $table='rols';

    protected $fillable=['tipo'];

   public function users()
   {
   	return $this->hasMany('App\User_Rol');
   }
}