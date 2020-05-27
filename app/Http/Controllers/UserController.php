<?php

namespace App\Http\Controllers;

use App\User;
use App\Categoria;
use App\Cart;
use App\Venta;
use App\venta_producto;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        $users =  User::all();
        
        //dd($tareas);
        return view('usuarios.userIndex', compact('users'));
    }

    public function show(User $user)
    {
        //
       
        return view('usuarios.userShow',compact('user'));
    }

    public function showUserCompras(){
        $categorias = Categoria::all();
        $userCart = new Cart();
        $cartProductos = $userCart->getCartProducts(\Auth::id());
        $total = $this->subTotalCart($cartProductos);
        $compras = Venta::where('user_id',\Auth::id())->get();
        //dd($compras);
        return view('usuarios.userCompras',compact('categorias','cartProductos','total','compras'));
    }

    public function showCompraDetails(Venta $venta){
        $categorias = Categoria::all();
        $userCart = new Cart();
        $cartProductos = $userCart->getCartProducts(\Auth::id());
        $total = $this->subTotalCart($cartProductos);
        
        $venta_productos = venta_producto::where('venta_id',$venta->id)->get();
        //dd($venta->id);
        //dd($venta_productos[0]->Producto);

        return view('usuarios.userCompraDetails',compact('categorias','cartProductos','total','compras',
            'venta','venta_productos'));
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
