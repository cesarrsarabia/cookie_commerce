@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-3">
        <a href="{{ action('CategoriaController@create') }}" class="menu-btn btn-hover">Agregar Categoria</a>
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
                        <th>Descripcion</th>
                        <th>Ver Detalles</th>                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                    <tr>                                            
                        <td class="product-name">
                            {{$categoria->nombre}}
                        </td>
                        <td class="product-name">
                            {{$categoria->descripcion}}
                        </td>                       
                        <td class="product-remove">
                            <a href="{{ route('categoria.show', $categoria) }}"><i class="pe-7s-look"></i></a>
                        </td>                        
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
      
    </div>
</div>
@endsection
