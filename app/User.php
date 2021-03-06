<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = true;

    protected $fillable = [
        'nombre', 'email', 'password','apellido','ciudad','direccion','tipo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function isAdmin(){
        if (strtolower($this->tipo )== "admin") {
            return true;
        } else {
            return false;
        }
        
    }
    
    public function Cart(){
        return $this->hasOne('App\Cart');
    }

    public function Venta(){
        return $this->hasMany('App\Venta');
    }

    public function Tarjeta(){
        return $this->hasMany('App\Tarjeta');
    }
}
