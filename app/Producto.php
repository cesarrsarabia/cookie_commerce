<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //

    protected $fillable = [
        'producto_id',
        'nombre',
        'descripcion',
        'precio',
        'categoria_id'
    ];
    protected $dates = ['created_at', 'updated_at'];
    protected $primaryKey = 'producto_id';
    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }
    
}
