<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Categoria extends Model
{
    //
    use SoftDeletes;

    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at'];
    protected $primaryKey = 'categoria_id';
    protected $fillable = [
        'categoria_id',
        'nombre',
        'descripcion'    
    ];
    public function Producto(){
        return $this->hasMany('App\Producto','producto_id');
    }
}
