<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shipping_address extends Model
{
    //
    public function venta(){
        return $this->belongsTo('App\Venta','shipping_address_id');
    }
}
