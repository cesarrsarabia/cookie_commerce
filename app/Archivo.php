<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;


class Archivo extends Model
{
    //
    public $timestamps = false;

    protected $fillable = [
        'id',
        'origen_id',
        'origen_type',
        'nombre_original',
        'nombre_hash',
        'tamaño',
        'mime'
    ];
    public function origen(){
        return $this->morphTo();
    }

    
}
