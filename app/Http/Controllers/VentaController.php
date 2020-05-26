<?php

namespace App\Http\Controllers;

use App\Venta;
use App\Categoria;
use App\shipping_address;
use App\Tarjeta;
use App\venta_producto;
use App\Cart;
use App\cart_producto;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas =  Venta::all();
        //dd($tareas);
        return view('ventas.ventaIndex', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        $userCart = new Cart();
        $cartProductos = $userCart->getCartProducts(\Auth::id());
        $total = $this->subTotalCart($cartProductos);
        return view('Ventas.ventaForm',compact('categorias','cartProductos','total'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeVenta(Request $request)
    {

        $request->validate([
            'estado' => 'required',
            'municipio' => 'required',
            'calle' => 'required',
            'num_exterior' => 'required',
            'cod_postal' => 'required|numeric',
            'telefono' => 'required|numeric',
            'nombre_titular' => 'required',
            'num_tarjeta' => 'required|min:19|regex:/^[0-9 ]+$/',
            'f_vencimiento' => 'required',
            'cvv' => 'required|numeric'
        ],
        [
            'required' => 'Campo Obligatorio',
            'num_tarjeta.regex' => 'Campo no valido',
            'min' => 'Campo no valido'
        ]);
        
        //dd($request->all());
        $shipAddress = shipping_address::create($request->all());

        Tarjeta::create(array_merge($request->all(),['user_id'=>\Auth::id()]));
        //dd($shipAddress);

        $num_pedido = IdGenerator::generate(['table' => 'ventas','field'=>'num_pedido', 'length' => 10, 'prefix' =>date('ym')]);
        $userCart = new Cart();
        $cartProductos = $userCart->getCartProducts(\Auth::id());
        $total = $this->subTotalCart($cartProductos);

        $venta = Venta::create(array_merge($request->all(),['user_id'=>\Auth::id(),
                                                'shipping_address_id' => $shipAddress->id,
                                                'num_pedido'=>$num_pedido,
                                                'total'=>$total]));

        //dd($venta);

        foreach ($cartProductos as $prod) {
            venta_producto::create([
                'venta_id' => $venta->id,
                'producto_id' => $prod->idProduct,
                'cantidad' => $prod->cantidad
            ]);
        }   
        
        //Elimina Productos del carrito         
        $cart = Cart::where('user_id',\Auth::id())->first();

        Cart::where('id',$cart->id)->delete();
        cart_producto::where('cart_id',$cart->id)->delete();

        return view('usuarios.userCompras');
     
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(venta $venta)
    {
        //
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
