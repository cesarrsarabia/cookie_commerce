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

    public function miCuenta(){
        $user = User::find(\Auth::id());
        $categorias = Categoria::all();
        $userCart = new Cart();
        $cartProductos = $userCart->getCartProducts(\Auth::id());
        $total = $this->subTotalCart($cartProductos);
        return view('usuarios.cuentaDetails',compact('user','categorias','userCart'
    ,'cartProductos','total'));
        
    }

    public function edit(User $user)
    {
       //$user = User::find(\Auth::id());
       $user = User::find(\Auth::id());
        $categorias = Categoria::all();
        $userCart = new Cart();
        $cartProductos = $userCart->getCartProducts(\Auth::id());
        $total = $this->subTotalCart($cartProductos);
        return view('usuarios.userForm',compact('user','categorias','userCart'
    ,'cartProductos','total'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        //
        //Valida que ls datos no estes vacios
        $user = User::find(\Auth::id());
        $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255', // Valida el tipo de dato sea fecha
            'email' => 'required',
        ]);
        
        User::where('id',$user->id)->update($request->except('_token','_method'));

        alert()->success('Usuario modificado con éxito');
        return redirect()->route('miCuenta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto
     * @return \Illuminate\Http\Response
     */
   

    
}
