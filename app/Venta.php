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
    public function ticket(){
        return $this->belongsTo('App\Ticket', 'ticket_id');
    }
    public function productos(){
        return $this->hasMany('App\Producto');
    }
}
