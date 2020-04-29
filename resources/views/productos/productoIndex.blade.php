@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-3">
        <a href="{{ action('ProductoController@create') }}" class="menu-btn btn-hover">Agregar Producto</a>
    </div>
   
</div>
<br>
<br>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="table-content table-responsive">
            <table>
                <thead>
                    <tr>                        
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>                    
                        <td class="product-thumbnail">
                            <a href="#"><img src="{{ asset('assets/img/cart/1.jpg') }}" alt=""></a>
                        </td>
                        <td class="product-name">
                            {{$producto->nombre}}
                        </td>
                        <td class="product-name">
                            {{$producto->descripcion}}
                        </td>
                        <td class="product-name">
                            ${{$producto->precio}}
                        </td>
                        <td class="product-remove">
                            <a href="#"><i class="pe-7s-note"></i></a>
                        </td>
                        <td class="product-remove">
                            <a href="#"><i class="pe-7s-close"></i></a>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
      
    </div>
</div>
@endsection
