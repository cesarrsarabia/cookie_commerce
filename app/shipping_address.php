<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shipping_address extends Model
{
    //
    protected $fillable = [
        'id',
        'pais',
        'estado',
        'municipio',
        'calle',
        'num_exterior',
        'cod_postal',
        'telefono'
    ];

    public function venta(){
        return $this->belongsTo('App\Venta','shipping_address_id');
    }
}
