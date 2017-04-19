<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido', 'email','clave','activacion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function rols()
    {
       return $this->hasMany('App\User_Rol');
    }

      public function stores()
    {
       return $this->hasMany('App\Store');
    }

       public function addresses()
    {
       return $this->hasMany('App\Address');
    }

       public function phones()
    {
       return $this->hasMany('App\Phone');
    }

      public function comments_stores()
    {
       return $this->hasMany('App\Comment_Store');
    }

      public function califications_stores()
    {
       return $this->hasMany('App\Calification_Store');
    }

    public function deliverymans_stores()
    {
        return $this->hasMany('App\Deliveryman_Store');
    }
}
