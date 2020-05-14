@extends('layouts.master')


@section('content')

<div>
    <div class="slider-area">
        <div class="slider-active-2 owl-carousel">
            <div class="single-slider-4 bg-img furits-slider">
                <div class="container">
                    <div class="fadeinup-animated furits-content text-center">
                        {{--<img class="animated" src="assets/img/slider/12.png" alt="">--}}
                       {{-- <p class="animated">Las mejores galletas en el mundo . Solo Aqui!--}}
                        </p>
                        <a class="furits-slider-btn btn-hover animated" href="product-details.html">Shop Now</a>
                        <img class="animated slide-img-position" src="{{ asset('images/cookies_bar.jpg') }}" 
                        style="width:974px;height:741px;" alt="">
                    </div>
                </div>
            </div>
            <div class="single-slider-4 bg-img furits-slider" style="background-image: url(assets/img/slider/16.jpg)">
                <div class="container">
                    <div class=" fadeinup-animated furits-content text-center">
                        <img class="animated" src="assets/img/slider/12.png" alt="">
                        <p class="animated">Health is not about the weight you lose. But about the life you gain!
                        </p>
                        <a class="furits-slider-btn btn-hover animated" href="product-details.html">Shop Now</a>
                        <img class="animated slide-img-position slide-img-position-2" src="assets/img/slider/20.png"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-social">
            <span>Follow us on: </span>
            <ul>
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="#"><i class="ti-pinterest"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- banner area start -->
    <div class="banner-area pt-90 pb-160 fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="furits-banner-wrapper mb-30 wow fadeInLeft">
                        <img src="assets/img/banner/40.jpg" alt="">
                        <div class="furits-banner-content">
                            <h4>Super Natural</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <a class="furits-banner-btn btn-hover" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="furits-banner-wrapper mb-30 wow fadeInUp">
                        <img src="assets/img/banner/41.jpg" alt="">
                        <div class="furits-banner-content">
                            <h4>KIWI Fresh</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <a class="furits-banner-btn btn-hover" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="furits-banner-wrapper mb-30 wow fadeInRight">
                        <img src="assets/img/banner/42.jpg" alt="">
                        <div class="furits-banner-content">
                            <h4>Pomegranate</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            <a class="furits-banner-btn btn-hover" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->
    <!-- product area start -->
    <div class="product-style-area gray-bg-4 pb-105">
        <div class="container-fluid">
            <div class="section-title-furits bg-shape text-center mb-80">
                <img src="assets/img/icon-img/49.png" alt="">
                <h2>Our Newest Products</h2>
            </div>
            <div class="product-fruit-slider owl-carousel">
                <div class="product-fruit-wrapper">
                    <div class="product-fruit-img">
                        <img src="assets/img/product/furits/1.jpg" alt="">
                        <div class="product-furit-action">
                            <a class="furit-animate-left" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="furit-animate-right" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-fruit-content text-center">
                        <h4><a href="product-details.html">Pinapple Freash</a></h4>
                        <span>$20.99</span>
                    </div>
                </div>
                <div class="product-fruit-wrapper">
                    <div class="product-fruit-img">
                        <img src="assets/img/product/furits/2.jpg" alt="">
                        <div class="product-furit-action">
                            <a class="furit-animate-left" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="furit-animate-right" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-fruit-content text-center">
                        <h4><a href="product-details.html">Kropi Jussi</a></h4>
                        <span>$20.99</span>
                    </div>
                </div>
                <div class="product-fruit-wrapper">
                    <div class="product-fruit-img">
                        <img src="assets/img/product/furits/3.jpg" alt="">
                        <div class="product-furit-action">
                            <a class="furit-animate-left" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="furit-animate-right" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-fruit-content text-center">
                        <h4><a href="product-details.html">Freash Avocado</a></h4>
                        <span>$20.99</span>
                    </div>
                </div>
                <div class="product-fruit-wrapper">
                    <div class="product-fruit-img">
                        <img src="assets/img/product/furits/4.jpg" alt="">
                        <div class="product-furit-action">
                            <a class="furit-animate-left" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="furit-animate-right" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-fruit-content text-center">
                        <h4><a href="product-details.html">Grean Lemooon</a></h4>
                        <span>$20.99</span>
                    </div>
                </div>
                <div class="product-fruit-wrapper">
                    <div class="product-fruit-img">
                        <img src="assets/img/product/furits/5.jpg" alt="">
                        <div class="product-furit-action">
                            <a class="furit-animate-left" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="furit-animate-right" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-fruit-content text-center">
                        <h4><a href="product-details.html">Red Bedena</a></h4>
                        <span>$20.99</span>
                    </div>
                </div>
                <div class="product-fruit-wrapper">
                    <div class="product-fruit-img">
                        <img src="assets/img/product/furits/1.jpg" alt="">
                        <div class="product-furit-action">
                            <a class="furit-animate-left" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="furit-animate-right" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-fruit-content text-center">
                        <h4><a href="product-details.html">Olivo la deshion</a></h4>
                        <span>$20.99</span>
                    </div>
                </div>
                <div class="product-fruit-wrapper">
                    <div class="product-fruit-img">
                        <img src="assets/img/product/furits/3.jpg" alt="">
                        <div class="product-furit-action">
                            <a class="furit-animate-left" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="furit-animate-right" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-fruit-content text-center">
                        <h4><a href="product-details.html">Freash Blackberry</a></h4>
                        <span>$20.99</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->
    <!-- banner area start -->
    <div class="fruits-choose-area pb-65 bg-img" style="background-image: url(assets/img/banner/43.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 col-12">
                    <div class="fruits-choose-wrapper-all">
                        <div class="fruits-choose-title">
                            <h2>WHY CHOOSE US ?</h2>
                        </div>
                        <div class="fruits-choose-wrapper">
                            <div class="single-fruits-choose">
                                <div class="fruits-choose-serial">
                                    <h3>01</h3>
                                </div>
                                <div class="fruits-choose-content">
                                    <h4>Lorem Ipsum Dolar Sit.</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                            </div>
                            <div class="single-fruits-choose">
                                <div class="fruits-choose-serial">
                                    <h3>02</h3>
                                </div>
                                <div class="fruits-choose-content">
                                    <h4>Lorem Ipsum Dolar Sit.</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                            </div>
                            <div class="single-fruits-choose">
                                <div class="fruits-choose-serial">
                                    <h3>03</h3>
                                </div>
                                <div class="fruits-choose-content">
                                    <h4>Lorem Ipsum Dolar Sit.</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->
    <!-- product area start -->
    <div class="product-style-area pt-130 pb-30 wow fadeInUp">
        <div class="container">
            <div class="section-title-furits text-center mb-95">
                <img src="assets/img/icon-img/49.png" alt="">
                <h2>More Fresh Products</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="product-fruit-wrapper mb-60">
                        <div class="product-fruit-img">
                            <img src="assets/img/product/furits/6.jpg" alt="">
                            <div class="product-furit-action">
                                <a class="furit-animate-left" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="furit-animate-right" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-fruit-content text-center">
                            <h4><a href="product-details.html">Pinapple Freash</a></h4>
                            <span>$20.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="product-fruit-wrapper mb-60">
                        <div class="product-fruit-img">
                            <img src="assets/img/product/furits/13.jpg" alt="">
                            <div class="product-furit-action">
                                <a class="furit-animate-left" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="furit-animate-right" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-fruit-content text-center">
                            <h4><a href="product-details.html">Kropi Jussi</a></h4>
                            <span>$20.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="product-fruit-wrapper mb-60">
                        <div class="product-fruit-img">
                            <img src="assets/img/product/furits/8.jpg" alt="">
                            <div class="product-furit-action">
                                <a class="furit-animate-left" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="furit-animate-right" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-fruit-content text-center">
                            <h4><a href="product-details.html">Freash Avocado</a></h4>
                            <span>$20.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="product-fruit-wrapper mb-60">
                        <div class="product-fruit-img">
                            <img src="assets/img/product/furits/9.jpg" alt="">
                            <div class="product-furit-action">
                                <a class="furit-animate-left" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="furit-animate-right" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-fruit-content text-center">
                            <h4><a href="product-details.html">Grean Lemooon</a></h4>
                            <span>$20.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="product-fruit-wrapper mb-60">
                        <div class="product-fruit-img">
                            <img src="assets/img/product/furits/10.jpg" alt="">
                            <div class="product-furit-action">
                                <a class="furit-animate-left" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="furit-animate-right" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-fruit-content text-center">
                            <h4><a href="product-details.html">Red Bedena</a></h4>
                            <span>$20.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="product-fruit-wrapper mb-60">
                        <div class="product-fruit-img">
                            <img src="assets/img/product/furits/11.jpg" alt="">
                            <div class="product-furit-action">
                                <a class="furit-animate-left" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="furit-animate-right" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-fruit-content text-center">
                            <h4><a href="product-details.html">Olivo la deshion</a></h4>
                            <span>$20.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="product-fruit-wrapper mb-60">
                        <div class="product-fruit-img">
                            <img src="assets/img/product/furits/12.jpg" alt="">
                            <div class="product-furit-action">
                                <a class="furit-animate-left" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="furit-animate-right" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-fruit-content text-center">
                            <h4><a href="product-details.html">Freash Blackberry</a></h4>
                            <span>$20.99</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="product-fruit-wrapper mb-60">
                        <div class="product-fruit-img">
                            <img src="assets/img/product/furits/13.jpg" alt="">
                            <div class="product-furit-action">
                                <a class="furit-animate-left" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="furit-animate-right" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-fruit-content text-center">
                            <h4><a href="product-details.html">Pinapple Freash</a></h4>
                            <span>$20.99</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->
    <!-- banner area start -->
    <div class="banner-area">
        <div class="row no-gutters">
            <div class="col-lg-6 col-md-6">
                <div class="fruits-banner2-wrapper fruits-banner-mrg">
                    <a href="#"><img src="assets/img/banner/44.jpg" alt=""></a>
                    <div class="fruits-banner2-content">
                        <img src="assets/img/icon-img/51.png" alt="">
                        <h3>30% off</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="fruits-banner2-wrapper">
                    <a href="#"><img src="assets/img/banner/45.jpg" alt=""></a>
                    <div class="fruits-banner2-content">
                        <img src="assets/img/icon-img/52.png" alt="">
                        <h3>30% off</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->
    <!-- services area start -->
    <div class="fruits-services ptb-200">
        <div class="fruits-services-wrapper">
            <div class="single-fruits-services">
                <div class="fruits-services-img">
                    <img src="assets/img/icon-img/53.png" alt="">
                </div>
                <div class="fruits-services-content">
                    <h4>Collect Natural Food</h4>
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is simply
                        industry.</p>
                </div>
            </div>
            <div class="single-fruits-services">
                <div class="fruits-services-img">
                    <img src="assets/img/icon-img/54.png" alt="">
                </div>
                <div class="fruits-services-content">
                    <h4>Set Your Location.</h4>
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is simply
                        industry.</p>
                </div>
            </div>
            <div class="single-fruits-services">
                <div class="fruits-services-img">
                    <img src="assets/img/icon-img/55.png" alt="">
                </div>
                <div class="fruits-services-content">
                    <h4>Collect Yor Product</h4>
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is simply
                        industry.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- services area end -->
    <!-- coundown area start -->
    <div class="coundown-area bg-img pt-175 pb-220" style="background-image: url(assets/img/banner/46.jpg)">
        <div class="container">
            <div class="row">
                <div class="ml-auto col-xl-5 ml-auto col-lg-7">
                    <div class="coundown-wrapper">
                        <h2>Best Deal for this <br>Product</h2>
                        <span>Pineapple Juice</span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour.</p>
                        <div class="timer">
                            <div data-countdown="2018/06/01"></div>
                        </div>
                        <a class="coundown-btn btn-hover" href="#">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- coundown area end -->
    <!-- top-seller area start -->
    <div class="fruits-top-seller-area pt-125">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="top-seller-wrapper mb-40">
                        <div class="top-seller-title">
                            <span>Firm Fresh</span>
                            <h3>New seasonal</h3>
                            <img src="assets/img/icon-img/56.png" alt="">
                        </div>
                        <div class="top-seller-contect-wrapper">
                            <div class="single-top-seller">
                                <div class="top-seller-img">
                                    <a href="#"><img src="assets/img/product/furits/14.jpg" alt=""></a>
                                </div>
                                <div class="top-seller-content">
                                    <h5><a href="#">Pinapple Freash</a></h5>
                                    <div class="fruit-price">
                                        <span>$25.22</span>
                                        <span class="old">$25.22</span>
                                    </div>
                                    <a href="#">Add to cart →</a>
                                </div>
                            </div>
                            <div class="single-top-seller">
                                <div class="top-seller-img">
                                    <a href="#"><img src="assets/img/product/furits/15.jpg" alt=""></a>
                                </div>
                                <div class="top-seller-content">
                                    <h5><a href="#">Kropi Jussi</a></h5>
                                    <div class="fruit-price">
                                        <span>$25.22</span>
                                        <span class="old">$25.22</span>
                                    </div>
                                    <a href="#">Add to cart →</a>
                                </div>
                            </div>
                            <div class="single-top-seller">
                                <div class="top-seller-img">
                                    <a href="#"><img src="assets/img/product/furits/16.jpg" alt=""></a>
                                </div>
                                <div class="top-seller-content">
                                    <h5><a href="#">Freash Avocado</a></h5>
                                    <div class="fruit-price">
                                        <span>$25.22</span>
                                        <span class="old">$25.22</span>
                                    </div>
                                    <a href="#">Add to cart →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="top-seller-wrapper mb-40">
                        <div class="top-seller-title">
                            <span>Firm Fresh</span>
                            <h3>Best Products</h3>
                            <img src="assets/img/icon-img/56.png" alt="">
                        </div>
                        <div class="top-seller-contect-wrapper">
                            <div class="single-top-seller">
                                <div class="top-seller-img">
                                    <a href="#"><img src="assets/img/product/furits/17.jpg" alt=""></a>
                                </div>
                                <div class="top-seller-content">
                                    <h5><a href="#">Grean Lemooon</a></h5>
                                    <div class="fruit-price">
                                        <span>$25.22</span>
                                        <span class="old">$25.22</span>
                                    </div>
                                    <a href="#">Add to cart →</a>
                                </div>
                            </div>
                            <div class="single-top-seller">
                                <div class="top-seller-img">
                                    <a href="#"><img src="assets/img/product/furits/18.jpg" alt=""></a>
                                </div>
                                <div class="top-seller-content">
                                    <h5><a href="#">Red Bedena</a></h5>
                                    <div class="fruit-price">
                                        <span>$25.22</span>
                                        <span class="old">$25.22</span>
                                    </div>
                                    <a href="#">Add to cart →</a>
                                </div>
                            </div>
                            <div class="single-top-seller">
                                <div class="top-seller-img">
                                    <a href="#"><img src="assets/img/product/furits/19.jpg" alt=""></a>
                                </div>
                                <div class="top-seller-content">
                                    <h5><a href="#">Freash Blackberry</a></h5>
                                    <div class="fruit-price">
                                        <span>$25.22</span>
                                        <span class="old">$25.22</span>
                                    </div>
                                    <a href="#">Add to cart →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="top-seller-wrapper mb-40">
                        <div class="top-seller-title">
                            <span>Firm Fresh</span>
                            <h3>Top Seller</h3>
                            <img src="assets/img/icon-img/56.png" alt="">
                        </div>
                        <div class="top-seller-contect-wrapper">
                            <div class="single-top-seller">
                                <div class="top-seller-img">
                                    <a href="#"><img src="assets/img/product/furits/20.jpg" alt=""></a>
                                </div>
                                <div class="top-seller-content">
                                    <h5><a href="#">Pinapple Freash</a></h5>
                                    <div class="fruit-price">
                                        <span>$25.22</span>
                                        <span class="old">$25.22</span>
                                    </div>
                                    <a href="#">Add to cart →</a>
                                </div>
                            </div>
                            <div class="single-top-seller">
                                <div class="top-seller-img">
                                    <a href="#"><img src="assets/img/product/furits/21.jpg" alt=""></a>
                                </div>
                                <div class="top-seller-content">
                                    <h5><a href="#">Kropi Jussi</a></h5>
                                    <div class="fruit-price">
                                        <span>$25.22</span>
                                        <span class="old">$25.22</span>
                                    </div>
                                    <a href="#">Add to cart →</a>
                                </div>
                            </div>
                            <div class="single-top-seller">
                                <div class="top-seller-img">
                                    <a href="#"><img src="assets/img/product/furits/22.jpg" alt=""></a>
                                </div>
                                <div class="top-seller-content">
                                    <h5><a href="#">Freash Avocado</a></h5>
                                    <div class="fruit-price">
                                        <span>$25.22</span>
                                        <span class="old">$25.22</span>
                                    </div>
                                    <a href="#">Add to cart →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top seller area end -->
    <!-- testimonials area start -->
    <div class="testimonials-area mt-90 pt-130 pb-125 wishlist bg-img"
        style="background-image: url(assets/img/banner/47.jpg)">
        <div class="container">
            <div class="testimonials-active owl-carousel">
                <div class="fruits-single-testimonial text-center">
                    <img alt="" src="assets/img/team/1.png">
                    <h3>This is a powerful friut store template</h3>
                    <p>Simply dummy text of the Lorem Ipsum printing and typesetting industry. Ipsum has been the
                        industry's standard dummy text. Lorem Ipsum is simply dummy text of the Lorem Ipsum printing
                        and typesetting industry. </p>
                    <div class="client-name">
                        <span class="client-name-bright">Martha White /</span>
                        <span>UIUX DEsigner</span>
                    </div>
                    <div class="fruits-ratting">
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                    </div>
                </div>
                <div class="fruits-single-testimonial text-center">
                    <img alt="" src="assets/img/team/1.png">
                    <h3>This is a powerful friut store template</h3>
                    <p>Simply dummy text of the Lorem Ipsum printing and typesetting industry. Ipsum has been the
                        industry's standard dummy text. Lorem Ipsum is simply dummy text of the Lorem Ipsum printing
                        and typesetting industry. </p>
                    <div class="client-name">
                        <span class="client-name-bright">Martha White /</span>
                        <span>UIUX DEsigner</span>
                    </div>
                    <div class="fruits-ratting">
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                    </div>
                </div>
                <div class="fruits-single-testimonial text-center">
                    <img alt="" src="assets/img/team/1.png">
                    <h3>This is a powerful friut store template</h3>
                    <p>Simply dummy text of the Lorem Ipsum printing and typesetting industry. Ipsum has been the
                        industry's standard dummy text. Lorem Ipsum is simply dummy text of the Lorem Ipsum printing
                        and typesetting industry. </p>
                    <div class="client-name">
                        <span class="client-name-bright">Martha White /</span>
                        <span>UIUX DEsigner</span>
                    </div>
                    <div class="fruits-ratting">
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                        <i class="icofont icofont-star yellow"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials area end -->
    <!-- blog area end -->
    <div class="blog-area pt-130 pb-70">
        <div class="container">
            <div class="section-title-furits text-center mb-95">
                <img src="assets/img/icon-img/49.png" alt="">
                <h2>Recent Fruits News</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30 wow fadeInLeft">
                        <div class="blog-img-2">
                            <a href="blog-details.html"><img alt="" src="assets/img/blog/17.jpg"></a>
                        </div>
                        <div class="blog-info-wrapper-2 text-center">
                            <div class="blog-meta-2">
                                <ul>
                                    <li>Firm</li>
                                    <li><a href="#">Mango</a></li>
                                </ul>
                            </div>
                            <h3><a href="#">Ezone Fruit Blog Lorem Ipsum is simply Title goes here.</a></h3>
                            <div class="blog-meta-2">
                                <ul>
                                    <li><a href="#">02 Like</a></li>
                                    <li><a href="#">04 Comment</a></li>
                                    <li><a href="#">300 View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30 wow fadeInUp">
                        <div class="blog-img-2">
                            <a href="blog-details.html"><img alt="" src="assets/img/blog/18.jpg"></a>
                        </div>
                        <div class="blog-info-wrapper-2 text-center">
                            <div class="blog-meta-2">
                                <ul>
                                    <li>Firm</li>
                                    <li><a href="#">Mango</a></li>
                                </ul>
                            </div>
                            <h3><a href="#">Ezone Fruit Blog Lorem Ipsum is simply Title goes here.</a></h3>
                            <div class="blog-meta-2">
                                <ul>
                                    <li><a href="#">02 Like</a></li>
                                    <li><a href="#">04 Comment</a></li>
                                    <li><a href="#">300 View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrapper mb-30 wow fadeInRight">
                        <div class="blog-img-2">
                            <a href="blog-details.html"><img alt="" src="assets/img/blog/19.jpg"></a>
                        </div>
                        <div class="blog-info-wrapper-2 text-center">
                            <div class="blog-meta-2">
                                <ul>
                                    <li>Firm</li>
                                    <li><a href="#">Mango</a></li>
                                </ul>
                            </div>
                            <h3><a href="#">Ezone Fruit Blog Lorem Ipsum is simply Title goes here.</a></h3>
                            <div class="blog-meta-2">
                                <ul>
                                    <li><a href="#">02 Like</a></li>
                                    <li><a href="#">04 Comment</a></li>
                                    <li><a href="#">300 View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area end -->
    <!-- newsletter area end -->
    <div class="newsletter-area bg-img ptb-105" style="background-image: url(assets/img/banner/48.jpg)">
        <div class="container">
            <div class="newsletter-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="fruits-newsletter-title">
                            <span>Subscribe</span>
                            <h3>To Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div id="mc_embed_signup" class="subscribe-form-furits f-right">
                            <form
                                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email"
                                        placeholder="Enter Mail Address" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text"
                                            name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                    </div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe"
                                            id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newsletter area end -->
@endsection
