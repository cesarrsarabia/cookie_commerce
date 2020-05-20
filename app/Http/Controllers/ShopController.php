<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //


    public function ShowProductsGrid(){
        //$productos = DB::table('productos')->pagination(9);
        $productos = Producto::paginate(2);
        //dd($productos);
        $categorias = Categoria::all();
        return view('shop.shopGrid',compact('productos','categorias'));
    }

    public function ShowProductDetails(){
        $categorias = Categoria::all();
        return view('shop.shopDetails',compact('categorias'));
    }
}
