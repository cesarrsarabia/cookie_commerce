@extends('layouts.master')

@section('content')
<!-- shopping-cart-area start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">Carrito</h1>
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>remover</th>
                                    <th>imagen</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartProductos as $cartProduct)
                                <tr>
                                    <td class="product-remove"><a href="#"><i class="pe-7s-close"></i></a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                    </td>
                                <td class="product-name"><a href="#">{{$cartProduct->nombre_product}}</a></td>
                                    <td class="product-price-cart"><span class="amount">${{$cartProduct->precio}}</span></td>
                                    <td class="product-quantity">
                                    <input value="{{$cartProduct->cantidad}}" type="number" readonly>
                                    </td>
                                <td class="product-subtotal">${{$cartProduct->precio * $cartProduct->cantidad}}</td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        {{-- 
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="coupon-all">                                
                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Actualizar Carrito" type="submit">
                                </div>
                            </div>
                        </div>
                        --}}
                    </div>
                    <div class="row">
                        @cannot('Checkout', App\Cart::class)
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Total Carrito</h2>
                                    <ul>                                    
                                        <li>Total<span>${{$total}}</span></li>
                                    </ul>
                                    <a href="{{ route('venta.create') }}">Proceder al pago</a>
                                </div>
                            </div>
                        @endcan
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- shopping-cart-area end -->
@endsection