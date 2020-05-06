<?php

namespace App;

use App\models\Archivo;
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
    public function venta()
    {
        return $this->belongsTo('App\Venta', 'venta_id');
    }
    public function archivos()
    {
        return $this->morphMany(Archivo::class,'origen');
    }
}
