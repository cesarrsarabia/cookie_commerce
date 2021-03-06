<?php

namespace App;

use App\models\Archivo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'producto_id',
        'nombre',
        'descripcion',
        'precio',
        'categoria_id'
    ];
    protected $dates = ['created_at', 'updated_at'];
    protected $primaryKey = 'producto_id';
    public function Categoria()
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

    public function venta_producto(){
        return $this->belongsTo('App\venta_producto','producto_id');
    }
}
