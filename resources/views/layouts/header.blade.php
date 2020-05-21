<header>
    <div class="header-bottom wrapper-padding-2 res-header-sm sticker header-sticky-3 furits-header" style="position:relative">
        <div class="container-fluid">
            <div class="header-bottom-wrapper">
                <div class="logo-2 ptb-35">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/LogoCookieCommerce.png') }}" alt=""
                     width="250px" height="100px">
                    </a>
                </div>
                <div class="menu-style-2 handicraft-menu menu-hover">
                    <nav>
                        <ul>
                                                   
                            <li><a href="{{ route('ShopGrid') }}">Productos</a>
                                <div class="category-menu-dropdown shop-menu">
                                    <div class="category-dropdown-style category-common2 mb-30">
                                        <h4 class="categories-subtitle">Por Categoria</h4>
                                        <ul>
                                            @foreach ($categorias as $categ)
                                            <li>
                                                <a href="#"> {{ $categ->nombre }}</a>
                                            </li>
                                            @endforeach                                            
                                        </ul>
                                    </div>
                                    {{--<div class="category-dropdown-style category-common2 mb-30">
                                        <h4 class="categories-subtitle"></h4>
                                        <ul>
                                            <li><a href="product-details.html">Todo</a></li>
                                           
                                        </ul>
                                    </div>
                                    --}}
                                    
                                    
                                </div>
                            </li>

                            <li>
                                <div class="furniture-search">
                                    <form action="#">
                                        <input style="width: 400px" placeholder="Búsqueda" type="text">
                                        <button>
                                            <i class="ti-search"></i>
                                        </button>
                                    </form>
                                </div>
                                
                            </li>   
                                                                                  
                        </ul>
                    </nav>
                </div>
                <div class="furits-login-cart">
                    <div class="furits-login">
                        <div class="menu-style-2 handicraft-menu menu-hover">
                        <ul>
                            @guest
                            @if (Route::has('register'))
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">Reg</a>
                            </li>
                            @endif
                            @else

                            <li>
                                <a href="#">Bienvenido, {{ Auth::user()->nombre }}</a>
                                <ul class="single-dropdown">
                                    <li>
                                        <a href="dropdown-item">
                                            Cuenta
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest


                        </ul>
                        </div>
                    </div>
                    <div class="header-cart-4 furits-cart">
                        <a class="icon-cart" href="#">
                            <i class="pe-7s-shopbag"></i>

                            @if (isset($cartProductos))
                            <span class="handicraft-count">
                                {{count($cartProductos)}}
                            </span>
                            @else
                            <span class="handicraft-count">
                               0
                            </span>
                            @endif
                           
                            
                           
                        </a>
                        <ul class="cart-dropdown">
                            @if (isset($cartProductos))
                            @foreach ($cartProductos as $item)
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="#">{{$item->nombre_product}}</a></h5>
                                    {{--<h6><a href="#">Black</a></h6>--}}
                                <span>${{$item->precio}} x {{$item->cantidad}}</span>
                                </div>
                                <div class="cart-delete">
                                    <a href="#"><i class="ti-trash"></i></a>
                                </div>
                            </li>
                            @endforeach
                            @endif
                           
                            <li class="cart-space">
                                <div class="cart-sub">
                                    <h4>Subtotal</h4>
                                </div>
                                <div class="cart-price">
                                    <h4>${{$subtotal}}</h4>
                                </div>

                            </li>
                            <li class="cart-btn-wrapper">
                                <a class="cart-btn btn-hover" href="#">view cart</a>
                                <a class="cart-btn btn-hover" href="#">checkout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
               
            </div>
            <div class="row">
                {{-- 
                <div class="mobile-menu-area handicraft-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a>
                                    <ul>
                                        <li><a href="index.html">Fashion</a></li>
                                        <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                        <li><a href="index-fruits.html">Fruits</a></li>
                                        <li><a href="index-book.html">book</a></li>
                                        <li><a href="index-electronics.html">electronics</a></li>
                                        <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                        <li><a href="index-food.html">food & drink</a></li>
                                        <li><a href="index-furniture.html">furniture</a></li>
                                        <li><a href="index-handicraft.html">handicraft</a></li>
                                        <li><a href="index-smart-watch.html">smart watch</a></li>
                                        <li><a href="index-sports.html">sports</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="menu-list.html">menu list</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">shop</a>
                                    <ul>
                                        <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                        <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                        <li><a href="shop.html">grid 4 column</a></li>
                                        <li><a href="shop-grid-box.html">grid box style</a></li>
                                        <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                        <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                        <li><a href="shop-list-box.html">list box style</a></li>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html"> tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">sticky style 2</a></li>
                                        <li><a href="product-details-6.html">gallery style</a></li>
                                        <li><a href="product-details-7.html">gallery style 2</a></li>
                                        <li><a href="product-details-8.html">fixed image style</a></li>
                                        <li><a href="product-details-9.html">fixed image style 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">BLOG</a>
                                    <ul>
                                        <li><a href="blog.html">blog 3 colunm</a></li>
                                        <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </div>
</header>