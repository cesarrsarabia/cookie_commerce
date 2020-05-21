<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public function User(){
        return $this->belongsTo('App\User','id');
    }
    public function cart_producto(){
        return $this->hasMany('App\cart_producto');
    }
}
