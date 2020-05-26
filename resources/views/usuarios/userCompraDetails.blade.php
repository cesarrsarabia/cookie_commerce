@extends('layouts.master')

@section('content')
<div class="checkout-area ptb-100">
    <div class="container">
        <div class="col-lg-6 col-md-12 col-12 offset-3">
            <div class="your-order">
                <h3>Pedido</h3>
                <div class="your-order-table table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-name">Producto</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($venta_productos as $ventaProducto)
                            <tr class="cart_item">
                                <td class="product-name">
                                    {{$ventaProducto->producto->nombre}} <strong class="product-quantity"> ×
                                        {{$ventaProducto->cantidad}}</strong>
                                </td>
                                <td class="product-total">
                                    <span class="amount">${{$ventaProducto->Producto->precio
                                     * $ventaProducto->cantidad}}</span>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                        <tfoot>

                            <tr class="order-total">
                                <th>Total Pedido</th>
                                <td><strong><span class="amount">${{$venta->total}}</span></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection