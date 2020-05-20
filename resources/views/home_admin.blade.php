@extends('layouts.master')

@section('header_content')

<style>
.card-img-top {
    width: 100%;
    height: 25vw;
    object-fit: cover;
}

.pad-left-card{
    padding-left:50px;
}
</style>

@endsection

@section('content')
    <div class="row pad-left-card">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/home_admin/flavor_categories.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Categorias</h5>
                  <p class="card-text">Gestión Categorias de Productos</p>
                  <a href="{{ route('categoria.index') }}" class="furits-banner-btn btn-hover">Abrir</a>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/home_admin/cookie_product.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Productos</h5>
                  <p class="card-text">Gestión de Productos</p>
                  <a href="{{ route('producto.index') }}" class="furits-banner-btn btn-hover">Abrir</a>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/home_admin/money-bag.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ventas</h5>
                  <p class="card-text">Gestión Ventas</p>
                  <a href="{{ route('venta.index') }}" class="furits-banner-btn btn-hover">Abrir</a>
                </div>
              </div>
        </div>
    </div>

<br>
<br>
    <div class="row pad-left-card">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/home_admin/users.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Usuarios</h5>
                <p class="card-text">Gestión Usuarios</p>
                <a href="{{ route('usuario.index') }}" class="furits-banner-btn btn-hover">Abrir</a>
                </div>
            </div>
        </div>
    </div>

@endsection