@extends('layouts.master')


@section('content')

<div>
    <div class="slider-area">
        <div class="slider-active owl-carousel">
            <div class="single-slider single-slider-book1 bg-img"
             style="background-image: url(images/main/cookies_main.jpg);width:1200px;height:760px;">
                <div class="container">
                    <div class="slider-animation slider-content-book fadeinup-animated">
                        <h1 class="animated"><span>Las mejores</span></h1>
                        <h2 class="animated">Galletas.</h2>
                        <p class="animated">{{-- Descripcion --}}</p>
                        <a href="{{ route('ShopGrid') }}">Más Galletas</a>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    <!-- product area start -->
    <div class="product-style-area pt-130 pb-30 wow fadeInUp">
        <div class="container">
            <div class="section-title-furits text-center mb-95">
                <img src="{{ asset('images/cookie.png') }}" width="60px" height="65px" alt="">
                <h2>Galletas más Nuevas</h2>
            </div>
            <div class="row">
                <div class="shop-product-content tab-content">
                    <div id="grid-sidebar7" class="tab-pane fade active show">
                        <div class="row">

                            @foreach ($productos as $product)
                            <div class="col-lg-4 col-md-6">
                                <div class="product-wrapper product-box-style mb-30">
                                    <div class="product-img">
                                        <a href="{{ route('ProductDetail', ['producto'=>$product]) }}">
                                            @isset($product->archivos->last()->nombre_hash)                                            
                                            <img id="blah" src="{{asset("storage/" .$product->archivos->last()->nombre_hash)}}"
                                             height="474px" alt=""/>                                                                                 
                                            @else
                                                <img src="assets/img/product/fashion-colorful/4.jpg" alt="">
                                            @endisset
                                            
                                        </a>
                                        <div class="product-action">
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-right" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="#">{{ $product->nombre}} </a></h4>
                                        <span>{{$product->precio}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div id="grid-sidebar8" class="tab-pane fade">
                        <div class="row">
                            @foreach ($productos as $product)
                            <div class="col-lg-12">

                                <div class="product-wrapper mb-30 single-product-list product-list-right-pr mb-60">
                                    <div class="product-img list-img-width">
                                        <a href="#">
                                            <img src="assets/img/product/fashion-colorful/1.jpg" alt="">
                                        </a>

                                        <div class="product-action-list-style">
                                            <a class="animate-right" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="product-list-info">
                                            <h4><a href="#">{{$product->nombre}} </a></h4>
                                            <span>{{$product->precio}}</span>
                                            <p>
                                                {{$product->descripcion}}
                                            </p>
                                        </div>
                                        <div class="product-list-cart-wishlist">
                                            <div class="product-list-cart">
                                                <a class="btn-hover list-btn-style" href="#">add to cart</a>
                                            </div>
                                            <div class="product-list-wishlist">
                                                <a class="btn-hover list-btn-wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


</div>
<!-- newsletter area end -->
@endsection


@section('scripts')
<script type="text/javascript">

</script>

@endsection