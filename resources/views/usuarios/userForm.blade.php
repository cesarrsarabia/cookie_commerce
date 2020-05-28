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

@isset($user)
    {!!Form::model($user, ['route' => ['usuario.update', $user],'method' => 'PATCH','enctype' => 'multipart/form-data'])!!}
    {{-- <form action="{{ route('tarea.update',$tarea->id) }}"
    method="POST">--}}
    @method('PATCH')
@else
    {!! Form::open(['route' => 'usuario.store','enctype' => 'multipart/form-data']) !!}
    {{-- <form action="{{ route('tarea.store') }}" method="POST">--}}
@endisset

<div class="row justify-content-center">
    <h1 class="cart-heading">Datos Cuenta</h1>
</div>

         
<div class="row">
    <div class="col-md-12 col-12 col-lg-12 col-xl-6 ml-auto mr-auto">
        <div class="login">
            <div class="login-form-container">
                <div class="login-form">

                    <br>
                    <br>
                   
                        {!! Form::text('nombre',null,['class' => 'form-control','id'=>'inputNombre']); !!}
                        
                        {!! Form::text('apellido',null,['class' => 'form-control','id'=>'inputApellido']); !!}
                       

                        <label for="inputEmail">email</label>
                       
                            {!! Form::text('email',null,['class' => 'form-control','id'=>'inputEmail']); !!}
                        

                        <div class="button-box">
                            <button type="submit" class="default-btn floatright">Guardar</button>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}



@endsection



