@extends('layouts.master')

@section('content')
<div class="cart-main-area pt-95 pb-100 wishlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">Mis Compras</h1>
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Numero Pedido</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($compras as $compra)
                                <tr>
                                    <td class="product-name"><a>#{{$compra->num_pedido}}</a></td>
                                    <td class="product-name"><a>{{$compra->created_at}}</a></td>
                                    <td class="product-name"><a>${{$compra->total}}</a></td>
                                    <td class="product-remove">
                                        <a href="{{ route('showCompraDetails', ['venta'=>$compra]) }}">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </td>
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


