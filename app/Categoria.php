<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    public $timestamps = false;

    protected $primaryKey = 'categoria_id';
    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
