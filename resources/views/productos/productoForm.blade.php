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

<div class="row justify-content-center">
    <h1 class="cart-heading">Agregar Producto</h1>
</div>

<div class="row">
    <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
        <div class="login">
            <div class="login-form-container">
                <div class="login-form">
                   
                        {!! Form::text('nombre',null,['placeholder'=>'Username','class' => 'form-control','id'=>'inputNombre']); !!}
                        {!! Form::text('descripcion',null ,['class' => 'form-control',
                            'id'=>'input_descripcion','placeholder'=>'Descripción']); !!}
                        {!! Form::number('precio',null , ['class' => 'form-control','id'=>'input_precio','placeholder'=>'Precio']); !!}
                        <div class="button-box">
                            <button type="submit" class="default-btn floatright">Añadir</button>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}

@endsection
