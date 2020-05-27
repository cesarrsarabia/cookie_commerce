@extends('layouts.master')


@section('content')
<div class="shop-page-wrapper ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-sidebar">
                    {{-- 
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Search Products</h3>
                        <div class="sidebar-search">
                            <form action="#">
                                <input placeholder="Search Products..." type="text">
                                <button><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    --}}
                    {{-- 
                    <div class="sidebar-widget mb-40">
                        <h3 class="sidebar-title">Filter by Price</h3>
                        <div class="price_filter">
                            <div id="slider-range"></div>
                            <div class="price_slider_amount">
                                <div class="label-input">
                                    <label>price : </label>
                                    <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                </div>
                                <button type="button">Filter</button> 
                            </div>
                        </div>
                    </div>
                    --}}
                    <div class="sidebar-widget mb-45">
                        <h3 class="sidebar-title">Categorias</h3>
                        <div class="sidebar-categories">
                            <ul>

                                @foreach ($categorias as $categ)
                                     <li><a href="#">{{$categ->nombre}}</a></li>
                                @endforeach
                              
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-overflow mb-45">
                       
                    </div>
                   {{-- 
                    <div class="sidebar-widget mb-50">
                        <h3 class="sidebar-title">Top rated products</h3>
                        <div class="sidebar-top-rated-all">
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/1.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/2.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/3.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-top-rated mb-30">
                                <div class="single-top-rated">
                                    <div class="top-rated-img">
                                        <a href="#"><img src="assets/img/product/sidebar-product/4.jpg" alt=""></a>
                                    </div>
                                    <div class="top-rated-text">
                                        <h4><a href="#">Flying Drone</a></h4>
                                        <div class="top-rated-rating">
                                            <ul>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                                <li><i class="pe-7s-star"></i></li>
                                            </ul>
                                        </div>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    --}}
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-product-wrapper">
                    <div class="shop-bar-area">
                        <div class="shop-bar pb-60">
                            <div class="shop-found-selector">
                                <div class="shop-found">
                                <p><span>{{count($productos)}}</span> Productos de <span>{{$productos->total()}}</span></p>
                                </div>
                                {{-- 
                                <div class="shop-selector">
                                    <label>Sort By : </label>
                                    <select name="select">
                                        <option value="">Default</option>
                                        <option value="">A to Z</option>
                                        <option value=""> Z to A</option>
                                        <option value="">In stock</option>
                                    </select>
                                </div>
                                --}}
                            </div>
                            <div class="shop-filter-tab">
                                <div class="shop-tab nav" role=tablist>
                                    <a class="active" href="#grid-sidebar7" data-toggle="tab" role="tab" aria-selected="false">
                                        <i class="ti-layout-grid4-alt"></i>
                                    </a>
                                    <a href="#grid-sidebar8" data-toggle="tab" role="tab" aria-selected="true">
                                        <i class="ti-menu"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="shop-product-content tab-content">
                            <div id="grid-sidebar7" class="tab-pane fade active show">
                                <div class="row">

                                    @foreach ($productos as $product)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-wrapper product-box-style mb-30">
                                            <div class="product-img">
                                                <a href="{{ route('ProductDetail', ['producto'=>$product]) }}">
                                                    <img src="assets/img/product/fashion-colorful/4.jpg" alt="">
                                                </a>
                                                <div class="product-action">
                                                    <a class="animate-left" title="Wishlist" href="#">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                    <a class="animate-top" title="Add To Cart" href="#">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
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
                                                    <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
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
                <div class="mt-10 text-center">
                   
                        @if ($productos->total() > $productos->perPage())
                           
                            {{$productos->links()}}
                        
                            
                        @endif
                       
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection