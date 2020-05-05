<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $fillable = [
        'venta_id',
        'precioTotal_producto',
        'cantidad',
        'producto_id'
    ];
    protected $primaryKey = 'venta_id';
    public function ticket(){
        return $this->belongsTo('App\Ticket', 'ticket_id');
    }
    public function productos(){
        return $this->hasMany('App\Producto');
    }
}
