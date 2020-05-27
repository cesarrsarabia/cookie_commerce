@extends('layouts.master')

@section('content')


<br>
<br>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="table-content table-responsive">
            <table>
                <thead>
                    <tr>                                              
                        <th>Num. Peido</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Ver Detalles</th>                        
                    </tr>
                </thead>
                <tbody>
                    @if (!isset($ventas))
                    <tr class="blank_row">
                        <td colspan="4"><strong>No existen Ventas Registradas</strong></td>
                    </tr>                    
                    @else
                        @foreach ($ventas as $venta)
                        <tr>                    
                            
                            <td class="product-name">
                                {{$venta->num_pedido}}
                            </td>
                            <td class="product-name">
                                {{$venta->created_at}}
                            </td>
                            <td class="product-name">
                                ${{$venta->total}}
                            </td>
                            <td class="product-remove">
                                <a href="{{ route('producto.show', $venta) }}"><i class="pe-7s-look"></i></a>
                            </td>                        
                        </tr>
                        @endforeach
                    @endif
                    
                   
                </tbody>
            </table>
        </div>
      
    </div>
</div>
@endsection
