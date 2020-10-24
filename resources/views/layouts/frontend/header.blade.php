<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist theme1">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <ul class="minicart-product-list">
            <li>
                <a href="{{route('product.show', 1)}}" class="image"><img src="assets/img/product/4.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="{{route('product.show', 1)}}" class="title">Walnut Cutting Board</a>
                    <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="{{route('product.show', 1)}}" class="image"><img src="assets/img/product/5.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="{{route('product.show', 1)}}" class="title">Lucky Wooden Elephant</a>
                    <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="{{route('product.show', 1)}}" class="image"><img src="assets/img/product/6.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="{{route('product.show', 1)}}" class="title">Fish Cut Out Set</a>
                    <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
        </ul>
        <a href="{{route('cart')}}" class="btn theme--btn-default btn--lg d-block d-sm-inline-block rounded-5 mt-30">view
            wishlist</a>
    </div>
</div>
<!-- OffCanvas Wishlist End -->
<header>
    <!-- header top start -->
    <div class="header-top theme1 bg-dark py-15  px-xl-90">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7 order-last order-md-first">
                    <div class="static-info text-center text-md-left">
                        <p class="text-white">Join our showroom and get <span class="theme-color">50 % off</span> !
                            Coupon code : <span class="theme-color">Junno50</span></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <nav class="navbar-top pb-2 pb-md-0 position-relative">
                        <ul class="d-flex justify-content-center justify-content-md-end align-items-center">
                            <li>
                                <a href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Setting <i class="ion ion-ios-arrow-down"></i></a>
                                <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown1">
                                    <li><a href="{{route('myaccount')}}">My account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="{{ auth()->logout() }}">Sign out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->
    <!-- header-middle satrt -->
    <!--header-middle -->
    <div id="sticky" class="header-bottom custom-column custom-sticky theme1 py-30  px-xl-90">
        <div class="container-fluid">
            <div class="row align-items-center position-relative">
                <div class="col-xl-5 order-first position-lg-static position-relative">
                    <div class="d-flex align-items-center justify-content-center justify-content-sm-start">
                        <div class="logo mb-30 mb-sm-0 mr-50 pr-10 mr-pr-0">
                            <a href="{{route('/')}}"><img src="{{asset('assets/img/logo/logo-dark.jpg')}}" alt="logo"></a>
                        </div>
                        <!-- header bottom start -->
                        <ul class="main-menu d-none d-lg-flex">
                            <li class="active ml-0">
                                <a href="{{route('/')}}" class="pl-0">Home</a>
                            </li>
                            <!-- <li class="position-static">
                                <a href=" #">Shop <i class="ion-ios-arrow-down"></i></a>
                                <ul class="mega-menu row mega-menu-custom-with">
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Shop Grid</a>
                                            </li>
                                            <li><a href="shop-grid-3-column.html">Shop Grid 3
                                                    Column</a></li>
                                            <li><a href="shop-grid-4-column.html">Shop Grid 4
                                                    Column</a></li>
                                            <li><a href="shop-grid-left-sidebar.html">Shop Grid Left
                                                    Sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">Shop Grid
                                                    Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Shop List</a>
                                            </li>
                                            <li><a href="shop-grid-list.html">Shop List</a></li>
                                            <li><a href="shop-grid-list-left-sidebar.html">Shop List
                                                    Left Sidebar</a>
                                            </li>
                                            <li><a href="shop-grid-list-right-sidebar.html">Shop
                                                    List Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Shop Single</a>
                                            </li>
                                            <li><a href="single-product.html">Shop Single</a></li>
                                            <li><a href="single-product-configurable.html">Shop
                                                    Variable</a></li>
                                            <li><a href="single-product-affiliate.html">Shop
                                                    Affiliate</a></li>
                                            <li><a href="single-product-group.html">Shop Group</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">other pages</a>
                                            </li>
                                            <li><a href="about-us.html">About Page</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="compare.html">Compare Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-12 mt-4">
                                        <a href="single-product.html" class="zoom-in overflow-hidden"><img
                                                src="assets/img/mega-menu/3.jpg" alt="img"></a>
                                    </li>
                                </ul>
                            </li> -->
                            <li><a href="{{route('allcategories')}}">Categories</a></li>
                            <li><a href="{{route('allproducts')}}">Products</a></li>
                            <!-- <li><a href="{{route('allfactories')}}">Factories</a></li> -->
                            <li><a href="{{route('contact')}}">contact Us</a></li>
                        </ul>
                        <!-- header bottom end -->
                    </div>
                </div>
                <div class="col-xl-4 order-last order-xl-0  mt-30 mt-lg-0">
                    <div class="search-form">
                        <form class="form-inline position-relative">
                            <input class="form-control theme1-border" type="search"
                                placeholder="Enter your search key ...">
                            <button class="btn search-btn theme-bg btn-rounded" type="submit"><i
                                    class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <!-- search-form end -->
                </div>
                <div class="col-xl-3 position-relative">
                    <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
                        <div class="cart-block-links theme1">
                            <ul class="d-flex">

                                <li class="none-in-xxl">
                                    <a href="#" class="search-toggle">
                                        <span class="position-relative">
                                            <i class="ion-ios-search-strong"></i>
                                        </span>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="compare.html">
                                        <span class="position-relative">
                                            <i class="icon-shuffle"></i>
                                            <span class="badge cbdg1">1</span>
                                        </span>
                                    </a>
                                </li> -->
                                <li>
                                    <a class="offcanvas-toggle" href="#offcanvas-wishlist">
                                        <span class="position-relative">
                                            <i class="icon-heart"></i>
                                            <span class="badge cbdg1">3</span>
                                        </span>
                                    </a>
                                </li>
                                <!-- <li class="mr-0 cart-block position-relative">
                                    <a class="offcanvas-toggle" href="#offcanvas-cart">
                                        <span class="position-relative">
                                            <i class="icon-bag"></i>
                                            <span class="badge cbdg1">3</span>
                                        </span>
                                        <span class="cart-total position-relative">$90.00</span>
                                    </a>
                                </li> -->
                                <!-- cart block end -->

                            </ul>


                        </div>
                        <div class="mobile-menu-toggle theme1 d-lg-none">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewbox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="search-body">
                        <div class="search-form">
                            <form class="form-inline position-relative">
                                <input class="form-control theme1-border" type="search"
                                    placeholder="Enter your search key ...">
                                <button class="btn search-btn theme-bg btn-rounded" type="submit"><i
                                        class="icon-magnifier"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle end -->

    <!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas theme1 offcanvas-mobile-menu">
    <div class="inner">
        <div class="border-bottom mb-4 pb-4 text-right">
            <button class="offcanvas-close">×</button>
        </div>
        <div class="offcanvas-head mb-4">
            <nav class="offcanvas-top-nav">
                <ul class="d-flex justify-content-center align-items-center">
                    <li class="mx-4"><a href="compare.html"><i class="ion-ios-loop-strong"></i> Compare <span>(0)</span>
                        </a></li>
                    <li class="mx-4">
                        <a href="{{route('cart')}}"> <i class="ion-android-favorite-outline"></i> Wishlist
                            <span>(0)</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="offcanvas-menu">
            <ul>
                <li><a href="{{route('/')}}">Home</a></li>
                <li><a href="{{route('allcategories')}}">Categories</a></li>
                <li><a href="{{route('allproducts')}}">Products</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
        </nav>
        <!-- <div class="offcanvas-social py-30">
            <ul>
                <li>
                    <a href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
            </ul>
        </div> -->
    </div>
</div>
<!-- offcanvas-mobile-menu end -->
    
    <!--=======  End of category menu =======-->
</header>