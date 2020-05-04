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

@isset($categoria)
    {!!Form::model($categoria, ['route' => ['categoria.update', $categoria->categoria_id],'method' => 'PATCH'])!!}
    {{-- <form action="{{ route('tarea.update',$tarea->id) }}"
    method="POST">--}}
    @method('PATCH')
@else
    {!! Form::open(['route' => 'categoria.store']) !!}
    {{-- <form action="{{ route('tarea.store') }}" method="POST">--}}
@endisset

<div class="row justify-content-center">
    <h1 class="cart-heading">Información Categoria</h1>
</div>

<div class="row">
    <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
        <div class="login">
            <div class="login-form-container">
                <div class="login-form">
                   
                        {!! Form::text('nombre',null,['placeholder'=>'Nombre','class' => 'form-control','id'=>'inputNombre']); !!}
                        {!! Form::textarea('descripcion',null ,['class' => 'form-control','rows'=> 4,'resize:none',
                            'id'=>'input_descripcion','placeholder'=>'Descripción']); !!}
                                                    
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
