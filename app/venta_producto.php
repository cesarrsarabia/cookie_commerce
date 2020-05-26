<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta_producto extends Model
{
    //

    protected $dates = [
        'created_at'
    ];
    protected $fillable = [
        'venta_id',
        'producto_id',
        'cantidad'
    ];

    public function Venta(){
        return $this->belongsTo('App\Venta');
    }

    public function Producto(){
        return $this->hasOne('App\Producto','producto_id');
    }
}
