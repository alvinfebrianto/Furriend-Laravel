<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Furriend</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @livewireStyles
</head>
<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4"></div>
                    <div class="col-xl-5 col-lg-4"></div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            @auth
                            <ul>                                
                                <li><i class="fi-rs-user"></i> {{ Auth::user()->name }}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><strong>Logout</strong></a>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <ul>                                
                                <li><a href="{{ route('login') }}">Log In </a>   |   <a href="{{ route('register') }}">Sign Up</a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="Logo"></a>
                    </div>
                    <div class="header-right">
                        @livewire('header-search-component')
                        <div class="header-action-right">
                            <div class="header-action-2">
                                @livewire('wishlist-icon-component')
                                @livewire('cart-icon-component')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="Logo"></a>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block mx-auto">
                        <nav>
                            <ul>
                                <li><a class="{{ request()->routeIs('home.index') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a></li>
                                <li><a class="{{ request()->routeIs('shop') ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a></li>
                                <li class="position-static"><a href="#">Categories <i class="fi-rs-angle-down"></i></a>
                                    <!-- <ul class="mega-menu">
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Women's Fashion</a>
                                            <ul>
                                                <li><a href="product-details.html">Dresses</a></li>
                                                <li><a href="product-details.html">Blouses & Shirts</a></li>
                                                <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                                <li><a href="product-details.html">Wedding Dresses</a></li>
                                                <li><a href="product-details.html">Prom Dresses</a></li>
                                                <li><a href="product-details.html">Cosplay Costumes</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Men's Fashion</a>
                                            <ul>
                                                <li><a href="product-details.html">Jackets</a></li>
                                                <li><a href="product-details.html">Casual Faux Leather</a></li>
                                                <li><a href="product-details.html">Genuine Leather</a></li>
                                                <li><a href="product-details.html">Casual Pants</a></li>
                                                <li><a href="product-details.html">Sweatpants</a></li>
                                                <li><a href="product-details.html">Harem Pants</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Technology</a>
                                            <ul>
                                                <li><a href="product-details.html">Gaming Laptops</a></li>
                                                <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                                <li><a href="product-details.html">Tablets</a></li>
                                                <li><a href="product-details.html">Laptop Accessories</a></li>
                                                <li><a href="product-details.html">Tablet Accessories</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-34">
                                            <div class="menu-banner-wrap">
                                                <a href="product-details.html"><img src="{{ asset('assets/imgs/banner/menu-banner.jpg') }}" alt="Furriend"></a>
                                                <div class="menu-banner-content">
                                                    <h4>Hot deals</h4>
                                                    <h3>Don't miss<br> Trending</h3>
                                                    <div class="menu-banner-price">
                                                        <span class="new-price text-success">Save to 50%</span>
                                                    </div>
                                                    <div class="menu-banner-btn">
                                                        <a href="product-details.html">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="menu-banner-discount">
                                                    <h3>
                                                        <span>35%</span>
                                                        off
                                                    </h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="blog.html">Blog </a></li>     
                                <li><a href="contact.html">Contact</a></li>
                                <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>                               
                                @auth
                                    <li><a href="#">My Account <i class="fi-rs-angle-down"></i></a>
                                        @if(Auth::user()->utype == 'ADM')
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                <li><a href="{{ route('admin.products') }}">Products</a></li>
                                                <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                                <li><a href="{{ route('admin.home.slider') }}">Manage Slider</a></li>
                                                <!-- <li><a href="#">Coupons</a></li>
                                                <li><a href="#">Orders</a></li>
                                                <li><a href="#">Customers</a></li> -->
                                            </ul>
                                        @else
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                            </ul>
                                        @endif
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            @livewire('wishlist-icon-component')
                            @livewire('cart-icon-component')
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="Logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search products…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a class="{{ request()->routeIs('home.index') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a class="{{ request()->routeIs('shop') ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Categories</a>
                                <!-- <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Dresses</a></li>
                                            <li><a href="product-details.html">Blouses & Shirts</a></li>
                                            <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="product-details.html">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Jackets</a></li>
                                            <li><a href="product-details.html">Casual Faux Leather</a></li>
                                            <li><a href="product-details.html">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">Gaming Laptops</a></li>
                                            <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                            <li><a href="product-details.html">Tablets</a></li>
                                            <li><a href="product-details.html">Laptop Accessories</a></li>
                                            <li><a href="product-details.html">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul> -->
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    @auth
                    <ul>                                
                        <li><i class="fi-rs-user"></i> {{ Auth::user()->name }}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><strong>Logout</strong></a>
                            </form>
                        </li>
                    </ul>
                    @else
                    <ul>                                
                        <li><a href="{{ route('login') }}">Log In </a>   |   <a href="{{ route('register') }}">Sign Up</a></li>
                    </ul>
                    @endif
                </div>
                <div class="mobile-social-icon">
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}"></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}"></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}"></a>
                    <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-youtube.svg') }}"></a>
                </div>
            </div>
        </div>
    </div>
    {{$slot}}
    <footer class="main">
        <section class="section-padding footer-mid newsletter">
            <div class="container pt-10 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="/"><img src="{{ asset('assets/imgs/logo/logo.png') }}"></a>
                            </div>
                            <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Address: </strong>Pasuruan
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Email: </strong>contact@furriend.io
                            </p><br>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}"></a>
                                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}"></a>
                                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}"></a>
                                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-youtube.svg') }}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>                            
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">My Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>                            
                            <li><a href="#">Order</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mob-center">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                <p class="mb-20 mt-10 wow fadeIn animated">Secured Payment Gateways</p>
                                <img class="wow fadeIn animated" src="{{ asset('assets/imgs/theme/payment-method.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
<!-- Vendor JS-->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{ asset('assets/js/main.js?v=3.3') }}"></script>
<script src="{{ asset('assets/js/shop.js?v=3.3') }}"></script>
@livewireScripts
@stack('scripts')
</body>
</html>