<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{

    public $timestamps = true;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'venta_id',
        'total',
        'cantidad',
        'folio'
    ];
    protected $primaryKey = 'venta_id';
    
    public function shipping_address(){
        return $this->hasOne('App\shipping_address');
    }

    public function venta_producto(){
        return $this->hasMany('App\venta_producto');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
