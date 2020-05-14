@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-3">
        <a href="{{ action('UserController@create') }}" class="menu-btn btn-hover">Agregar Producto</a>
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
                      
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha Registro</th>
                        <th>Estatus</th>
                        <th>Ver Detalles</th>                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>                    
                        
                        <td class="product-name">
                            {{$user->nombre}}
                        </td>
                        <td class="product-name">
                            {{$user->apellido}}
                        </td>
                        <td class="product-name">
                            {{$user->created_at}}
                        </td>
                        <td class="product-name">
                            @if ($user->status)
                                Activo
                            @else
                                Inactivo
                            @endif
                           
                        </td>
                        <td class="product-remove">
                            <a href="{{ route('usuario.show', $user->id) }}"><i class="pe-7s-look"></i></a>
                        </td>                        
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
      
    </div>
</div>
@endsection
