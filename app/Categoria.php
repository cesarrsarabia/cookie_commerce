<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    public $timestamps = false;
    protected $primaryKey = 'categoria_id';
    protected $fillable = [
        'categoria_id',
        'nombre',
        'descripcion'    
    ];
    public function productos(){
        return $this->hasMany('App\Producto');
    }
}
