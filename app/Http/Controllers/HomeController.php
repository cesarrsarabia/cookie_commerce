<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use App\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorias = Categoria::all();
        $productos = Producto::all();

       
        
        if(\Auth::check()){
            if(\Auth::user()->isAdmin()){
                return view('home_admin');
            }else{
                $userCart = new Cart();
                $cartProductos = $userCart->getCartProducts(\Auth::id());
                $subtotal = $this->subTotalCart($cartProductos);
                
                return view('home',compact('categorias','productos','cartProductos','subtotal'));
            }
        }else{
            return view('home',compact('categorias','productos'));
        }
        
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
