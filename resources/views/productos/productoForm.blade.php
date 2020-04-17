@extends('layouts.master')

@section('content')

<div class="row justify-content-center">


    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

@isset($producto)
    {!!Form::model($producto, ['route' => ['producto.update', $producto->id],'method' => 'PATCH'])!!}
    {{-- <form action="{{ route('tarea.update',$tarea->id) }}"
    method="POST">--}}
    @method('PATCH')
@else
    {!! Form::open(['route' => 'producto.store']) !!}
    {{-- <form action="{{ route('tarea.store') }}" method="POST">--}}
@endisset


    <div class="row">
        <div class="form-group">
            <label for="inputNombre">Nombre Producto</label>
            {!! Form::text('nombre',null, ['class' => 'form-control','id'=>'inputNombre']); !!}
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label for="input_descripcion">Descripción</label>
            {!! Form::text('descripcion',null , ['class' => 'form-control','id'=>'input_descripcion']); !!}
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label for="input_precio">Precio</label>
            {!! Form::number('precio',null , ['class' => 'form-control','id'=>'input_precio']); !!}
        </div>
    </div>


    <br>

    <button type="submit" class="btn btn-primary">Guardar</button>

{!! Form::close() !!}

@endsection
