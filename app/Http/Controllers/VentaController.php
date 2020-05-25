<?php

namespace App\Http\Controllers;

use App\venta;
use App\Categoria;
use App\Cart;
use Illuminate\Http\Request;

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
        //
        $request->validate([
            'estado' => 'required',
            'municipio' => 'required',
            'calle' => 'required',
            'num_exterior' => 'required',
            'cod_postal' => 'required|numeric',
            'telefono' => 'required|numeric',
            'nombre_titular' => 'required',
            'numTarjeta' => 'required|numeric',
            'f_vencimiento' => 'required',
            'cvv' => 'required|numeric'
        ],
        [
            'required' => 'Campo Obligatorio'
        ]);
        
        
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
