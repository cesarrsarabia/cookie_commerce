<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    protected $fillable = [
        'tarjeta_id',
        'nombre_titular',
        'fecha_vencimiento',
        'numero',
        'cvc'
    ];
    protected $primaryKey = 'tarjeta_id';

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }

    public function ticket()
    {
        return $this->belongsTo('App\Ticket', 'ticket_id');
    }


}
