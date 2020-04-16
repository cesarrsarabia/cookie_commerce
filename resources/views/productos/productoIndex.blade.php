@extends('layouts.main')

@section('content')
<br>
<br>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card shadow">
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
    </div>
</div>
    @endsection
