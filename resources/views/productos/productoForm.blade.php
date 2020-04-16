
<div class="container">
    <div class="row justify-content-center">


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="row">
        @isset($producto)
            {!!Form::model($producto, ['route' => ['producto.update', $producto->id],'method' => 'PATCH'])!!}
        {{-- <form action="{{ route('tarea.update',$tarea->id) }}" method="POST">--}}
        @method('PATCH')
        @else
            {!! Form::open(['route' => 'producto.store']) !!}
        {{--<form action="{{ route('tarea.store') }}" method="POST">--}}
        @endisset


        {{--@csrf--}}
        <!--Genera un token para verificar que el formulario viene de fuente confiable-->
        <div class="form-group">


            <label for="inputNombre">Nombre Producto</label>

            {!! Form::text('nombre_producto',null, ['class' => 'form-control','id'=>'inputNombre']); !!}

            {{-- <input type="text" class="form-control" id="inputNombre" name="nombre_tarea"
                value="{{$tarea->nombre_tarea ?? ''}}">
            --}}
        </div>
      
        
        <br>

        <button type="submit" class="btn btn-primary">Guardar</button>
        {!! Form::close() !!}
    </div>
</div>