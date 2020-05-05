<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'ticket_id';
    protected $fillable = [
        'ticket_id',
        'usuario_id',
        'venta_id',
        'fecha',
        'hora',
        'tarjeta_id'
    ];
    public function venta(){
        return $this->hasMany('App\Venta');
    }
    public function tarjeta(){
        return $this->hasMany('App\Tarjeta');
    }
}
