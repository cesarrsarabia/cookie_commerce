<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart_producto extends Model
{
    //
    public $timestamps = true;

    protected $fillable = [
        'cart_id','producto_id','cantidad'
    ];
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];


    public function Cart(){
        return $this->belongsTo('App\Cart','id');
    }
}
