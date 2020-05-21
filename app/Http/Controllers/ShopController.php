<?php

namespace App\Http\Controllers;

use App\Cart;
use App\cart_producto;
use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ShopController extends Controller
{
    //


    public function ShowProductsGrid()
    {
        //$productos = DB::table('productos')->pagination(9);
        $productos = Producto::paginate(2);
        //dd($productos);
        $categorias = Categoria::all();
        return view('shop.shopGrid', compact('productos', 'categorias'));
    }

    public function ShowProductDetails(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('shop.shopDetails', compact('categorias', 'producto'));
    }

    public function AddProductToCart(Request $request, Producto $producto)
    {


        if (Cart::where('user_id', '=', \Auth::id())->exists()) {

        } else {
            $request->validate([
                'quantity' => 'required|numeric|gt:0',
            ],
            [
                'quantity.required' => 'Ingrese la Cantidad',
                'quantity.gt'  => 'La cantidad debe ser mayor a 0.'
            ]);

            $cart_data = ['user_id' => \Auth::id(),'created_at' => Carbon::now()];
            $idCartInserted = DB::table('carts')->insertGetId($cart_data);
            $cartProductData = [
                'cart_id' => $idCartInserted,
                'producto_id' => $producto->producto_id,
                'cantidad' => $request->quantity
            ];

            cart_producto::create($cartProductData);


            //DB::table('cart_products')->insert();
        }
    }

    
}
