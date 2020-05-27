@extends('layouts.master')

@section('content')

<div class="product-details ptb-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="product-details-img-content">
                    <div class="product-details-tab mr-35 product-details-tab2">
                        {{-- 
                        <div class="product-details-small nav mr-10 product-details-2" role=tablist>
                            <a class="active mb-10" href="#pro-details1" data-toggle="tab" role="tab" aria-selected="true">
                                <img src="{{ asset('images/no_img.png') }}" alt="">
                            </a>
                            <a class="mb-10" href="#pro-details2" data-toggle="tab" role="tab" aria-selected="true">
                                <img src="{{ asset('images/no_img.png') }}" alt="">
                            </a>
                            <a class="mb-10" href="#pro-details3" data-toggle="tab" role="tab" aria-selected="true">
                                <img src="{{ asset('images/no_img.png') }}" alt="">
                            </a>
                            <a class="mb-10" href="#pro-details4" data-toggle="tab" role="tab" aria-selected="true">
                                <img src="{{ asset('images/no_img.png') }}" alt="">
                            </a>
                        </div>
                      --}}
                        <div class="product-details-large tab-content">
                            <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay  is-ready">
                                    <a href="assets/img/product-details/bl1.jpg">
                                        @isset($producto->archivos->last()->nombre_hash)
                                        <img id="blah" src="{{asset("storage/" .$producto->archivos->last()->nombre_hash)}}" alt=""/>                                 
                                        @else
                                        <img src="{{ asset('images/no_img.png') }}" alt="">
                                        @endisset
                                        
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-details2" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay  is-ready">
                                    <a href="assets/img/product-details/bl2.jpg">
                                        <img src="{{ asset('images/no_img.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-details3" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay  is-ready">
                                    <a href="assets/img/product-details/bl3.jpg">
                                        <img src="{{ asset('images/no_img.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-details4" role="tabpanel">
                                <div class="easyzoom easyzoom--overlay  is-ready">
                                    <a href="assets/img/product-details/bl4.jpg">
                                        <img src="{{ asset('images/no_img.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-12">
                <div class="product-details-content">
                    <h3>{{$producto->nombre}}</h3>
                    {{-- 
                    <div class="rating-number">
                        <div class="quick-view-rating">
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                        </div>
                        <div class="quick-view-number">
                            <span>2 Ratting (S)</span>
                        </div>
                    </div>
                    --}}
                    <div class="details-price">
                    <span>${{$producto->precio}}</span>
                    </div>
                    {{-- Descripcion--}}
                    <p>
                        {{$producto->descripcion}}
                    </p>
                    {{-- 
                    <div class="quick-view-select">
                        <div class="select-option-part">
                            <label>Size*</label>
                            <select class="select">
                                <option value="">- Please Select -</option>
                                <option value="">xl</option>
                                <option value="">ml</option>
                                <option value="">m</option>
                                <option value="">sl</option>
                            </select>
                        </div>
                        <div class="select-option-part">
                            <label>Color*</label>
                            <select class="select">
                                <option value="">- Please Select -</option>
                                <option value="">orange</option>
                                <option value="">pink</option>
                                <option value="">yellow</option>
                            </select>
                        </div>
                    </div>
                    --}}
                    {!! Form::open(['id'=>'FormCart','route' => ['ShopAddToCart','producto'=>$producto]]) !!}
                    <div class="quickview-plus-minus">
                        
                        <div class="cart-plus-minus">
                            <input type="number" value="1" name="quantity" class="cart-plus-minus-box">
                        </div>
                        <div class="quickview-btn-cart">
                            <a class="btn-hover-black" href="#" onclick="document.getElementById('FormCart').submit();">
                                add to cart
                            </a>
                        </div>
                        <div class="quickview-btn-wishlist">
                            <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                        </div>
                       
                    </div>
                    {!! Form::close() !!}

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="product-details-cati-tag mt-35">
                        <ul>
                            <li class="categories-title">Categorias :</li>
                        <li><a href="#">{{$producto->categoria->nombre}}</a></li>
                           
                        </ul>
                    </div>
                    {{-- 
                    <div class="product-details-cati-tag mtb-10">
                        <ul>
                            <li class="categories-title">Tags :</li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">electronics</a></li>
                            <li><a href="#">toys</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">jewellery</a></li>
                        </ul>
                    </div>

                    --}}
                    <div class="product-share">
                        <ul>
                            <li class="categories-title">Share :</li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont icofont-social-flikr"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection