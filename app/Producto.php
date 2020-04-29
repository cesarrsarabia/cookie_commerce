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
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    
}
