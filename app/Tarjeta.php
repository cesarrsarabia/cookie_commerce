<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    public $timestamps = true;
    
    protected $fillable = [
        'id',
        'user_id',
        'nombre_titular',
        'f_vencimiento',
        'num_tarjeta',
        'cvv'
    ];

    protected $dates = [
        'created_at'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
