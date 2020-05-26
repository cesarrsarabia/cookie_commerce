<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use App\cart_producto;
use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use UxWeb\SweetAlert\SweetAlert;

class ShopController extends Controller
{
    //


    public function ShowProductsGrid(Request $request)
    {
        //$productos = DB::table('productos')->pagination(9);
        if(isset($request->search_input)){
            
            $productos = Producto::where('nombre', 'like', '%' . $request->search_input . '%')->paginate(2);
        }else{
            $productos = Producto::paginate(2);
        }
        
        //dd($productos);
        $categorias = Categoria::all();
        $userCart = new Cart();
        $cartProductos = $userCart->getCartProducts(\Auth::id());
        $subtotal = $this->subTotalCart($cartProductos);
        return view('shop.shopGrid', compact('productos',
         'categorias','userCart','cartProductos','subtotal'));
    }

    public function ShowProductDetails(Producto $producto)
    {
        $categorias = Categoria::all();
        $userCart = new Cart();
        $cartProductos = $userCart->getCartProducts(\Auth::id());
        $subtotal = $this->subTotalCart($cartProductos);
        return view('shop.shopDetails', compact('categorias', 'producto',
                    'userCart','cartProductos','subtotal'));
    }

    public function AddProductToCart(Request $request, Producto $producto)
    {
        $request->validate([
            'quantity' => 'required|numeric|gt:0',
        ],
        [
            'quantity.required' => 'Ingrese la Cantidad',
            'quantity.gt'  => 'La cantidad debe ser mayor a 0.'
        ]);


        if (Cart::where('user_id', '=', \Auth::id())->exists()) {
            $idCart = Cart::where('user_id','=',\Auth::id())->first()->value('id');
        } else {
           
            $cart_data = ['user_id' => \Auth::id(),'created_at' => Carbon::now()];
            $idCart = DB::table('carts')->insertGetId($cart_data);
        }
        $cartProductData = [
            'cart_id' => $idCart,
            'producto_id' => $producto->producto_id,
            'cantidad' => $request->quantity
        ];

        cart_producto::create($cartProductData);

        alert()->success('Producto agregado al carrito');
        return redirect()->back();
    }



    private function subTotalCart($products){
        if(!isset($products)){
            return 0;
        }
        $subTotal = 0;
        foreach($products as $p){
            $totalProduct = $p->precio * $p->cantidad;
             $subTotal += $totalProduct;
        }
        return $subTotal;
    }
    
}
