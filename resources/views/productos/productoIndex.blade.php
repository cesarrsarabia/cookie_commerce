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
                    
                </tbody>
            </table>
        </div>
       {{--  <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
            </div>
            <br>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{ action('ProductoController@create') }}"
                        class="btn btn-success btn-primary">
                        Nuevo Producto
                    </a>

                    <hr>
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                        </thead>
                        @foreach($productos as $producto)
                            <tr>
                                <td>
                                    <a href="{{ route('producto.show',$producto->id) }}">
                                        {{ $producto->id }}
                                    </a>
                                </td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->descripcion }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        --}}
    </div>
</div>
@endsection
