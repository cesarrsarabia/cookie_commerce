<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    //
    public function User(){
        return $this->belongsTo('App\User','id');
    }
    public function cart_producto(){
        return $this->hasMany('App\cart_producto');
    }

    public function getCartProducts($userId){
        return DB::table('carts')
                ->select('productos.nombre as nombre_product','productos.precio as precio',
                        'cart_productos.cantidad','carts.id as idCart')
                ->join('cart_productos', 'carts.id', '=', 'cart_productos.cart_id')
                ->join('productos', 'productos.producto_id', '=', 'cart_productos.producto_id')
                ->where('carts.user_id', '=', $userId)
                ->get();
                
    }
}
