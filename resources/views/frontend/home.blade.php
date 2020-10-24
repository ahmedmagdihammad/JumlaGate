@extends('layouts.frontend.master')
@section('content')
    <!-- Start Slider -->
    <section class="bg-light position-relative">
        <div class="main-slider dots-style theme1">
            <div class="slider-item bg-img bg-img5">
                <div class="container">
                    <div class="row align-items-center slider-height2">
                        <div class="col-12">
                            <div class="slider-content">
                                <p class="text text-white text-uppercase animated mb-25" data-animation-in="fadeInDown">
                                    Radish chips</p>
                                <h4 class="title text-white animated text-capitalize mb-25" data-animation-in="fadeInLeft"
                                    data-delay-in="1">Lunchbox Snack</h4>
                                <h2 class="sub-title text-white animated" data-animation-in="fadeInRight" data-delay-in="2">
                                    Kids’ll Love !</h2>
                                <a href="shop-grid-4-column.html"
                                    class="btn theme--btn1 btn--lg text-uppercase rounded-5 animated mt-45 mt-sm-25"
                                    data-animation-in="zoomIn" data-delay-in="3">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-item end -->
            <div class="slider-item bg-img bg-img6">
                <div class="container">
                    <div class="row align-items-center slider-height2">
                        <div class="col-12">
                            <div class="slider-content">
                                <p class="text text-white text-uppercase animated mb-25" data-animation-in="fadeInLeft">
                                    organics Food</p>
                                <h4 class="title text-white animated text-capitalize mb-25" data-animation-in="fadeInRight"
                                    data-delay-in="1">Dried Persimmon</h4>
                                <h2 class="sub-title text-white animated" data-animation-in="fadeInUp" data-delay-in="2">Up
                                    Sale Up To 40% Off</h2>
                                <a href="shop-grid-4-column.html"
                                    class="btn theme--btn1 btn--lg text-uppercase rounded-5 animated mt-45 mt-sm-25"
                                    data-animation-in="zoomIn" data-delay-in="3">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-item end -->
        </div>
        <!-- slick-progress -->
        <div class="slick-progress">
            <span></span>
        </div>
        <!-- slick-progress end-->
    </section>
    <!-- main slider end -->
    <!-- popular-section  start -->
    <div class="popular-section theme1 bg-white pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-30">
                        <h2 class="title text-dark text-capitalize">Popular Categories</h2>
                        <!-- <p class="text mt-10">Some of our popular categories include electronics</p> -->
                    </div>
                </div>
                <div class="col-12">
                    <div class="popular-slider-init dots-style">
                        <!-- slider-item end -->
                        @foreach($factories as $fact)
                        <div class="slider-item" style="display:block;">
                            <div class="card popular-card popular-card-bg zoom-in d-block overflow-hidden">
                                <div class="card-body">
                                    <a href="{{route('allcategories.show', $fact->id)}}" class="thumb-naile"> <img class="d-block mx-auto"
                                            src="{{asset('factory_logos/'.$fact->logo)}}" alt="img"></a>
                                    <h3 class="popular-title">
                                        <a href="{{route('allcategories.show', $fact->id)}}"> {{$fact->name_en}} <span></span></a>
                                    </h3>
                                    <a href="shop-grid-4-column.html" class="btn shop-now-btn text-uppercase mt-25">shop
                                        now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- slider-item end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular-section  end -->

    <!-- Start Slider -->
    <section class="bg-light position-relative">
        <div class="main-slider dots-style theme1">
            <div class="slider-item bg-img bg-img5">
                <div class="container">
                    <div class="row align-items-center slider-height2">
                        <div class="col-12">
                            <div class="slider-content">
                                <p class="text text-white text-uppercase animated mb-25" data-animation-in="fadeInDown">
                                    Radish chips</p>
                                <h4 class="title text-white animated text-capitalize mb-25" data-animation-in="fadeInLeft"
                                    data-delay-in="1">Lunchbox Snack</h4>
                                <h2 class="sub-title text-white animated" data-animation-in="fadeInRight" data-delay-in="2">
                                    Kids’ll Love !</h2>
                                <a href="shop-grid-4-column.html"
                                    class="btn theme--btn1 btn--lg text-uppercase rounded-5 animated mt-45 mt-sm-25"
                                    data-animation-in="zoomIn" data-delay-in="3">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-item end -->
            <div class="slider-item bg-img bg-img6">
                <div class="container">
                    <div class="row align-items-center slider-height2">
                        <div class="col-12">
                            <div class="slider-content">
                                <p class="text text-white text-uppercase animated mb-25" data-animation-in="fadeInLeft">
                                    organics Food</p>
                                <h4 class="title text-white animated text-capitalize mb-25" data-animation-in="fadeInRight"
                                    data-delay-in="1">Dried Persimmon</h4>
                                <h2 class="sub-title text-white animated" data-animation-in="fadeInUp" data-delay-in="2">Up
                                    Sale Up To 40% Off</h2>
                                <a href="shop-grid-4-column.html"
                                    class="btn theme--btn1 btn--lg text-uppercase rounded-5 animated mt-45 mt-sm-25"
                                    data-animation-in="zoomIn" data-delay-in="3">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-item end -->
        </div>
        <!-- slick-progress -->
        <div class="slick-progress">
            <span></span>
        </div>
        <!-- slick-progress end-->
    </section>
    <!-- main slider end -->

    <!-- product tab start -->
    <section class="product-tab bg-white pt-50 pb-80">
        <div class="container">
            <div class="product-tab-nav mb-35">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-30">
                            <h2 class="title text-dark text-capitalize">Our products</h2>
                            <!-- <p class="text mt-10">Add our products to weekly line up</p> -->
                        </div>
                    </div>
                    <div class="col-12">
                        <nav class="product-tab-menu theme1">
                            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a href="{{route('/')}}" class="nav-link active" id="pills-home-tab">All Products</a>
                                </li>
                                @foreach($categories as $category)
                                <form action="{{route('searchProduct')}}" method="get">
                                    @csrf
                                    <input type="hidden" name="categoryid" value="{{$category->id}}">
                                    <li class="nav-item">
                                        <button type="submit" class="nav-link active" id="pills-home-tab">{{$category->name_en}}</button>
                                    </li>
                                </form>
                                <br>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- product-tab-nav end -->
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">
                        <!-- first tab-pane -->
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="product-slider-init theme1 slick-nav">
                                <!-- slider-item end -->
                                @foreach($productes as $product)
                                <div class="slider-item">
                                    <div class="product-list mb-30">
                                        <div class="card product-card">
                                            <div class="card-body p-0">
                                                <div class="product-desc py-0">
                                                    <!-- <h3 class="title"><a href="#">{{$product->name}}</a></h3> -->
                                                </div>
                                                <div class="product-thumbnail position-relative">
                                                    <span class="badge badge-danger top-right">New</span>
                                                    <a href="#">
                                                        <img class="first-img" src="{{asset('factory_logos/'.$product['img_1'])}}" alt="thumbnail">
                                                        <img class="second-img" src="{{asset('factory_logos/'.$product['img_1'])}}" alt="234">
                                                    </a>
                                                    <!-- product links -->
                                                    <ul class="product-links d-flex justify-content-center">
                                                        <li>
                                                            <a href="{{route('cart')}}">
                                                                <span data-toggle="tooltip" data-placement="bottom"
                                                                    title="add to wishlist" class="icon-heart"> </span>
                                                            </a>
                                                        </li>
                                                        <!-- <li>
                                                            <a href="#" data-toggle="modal" data-target="#compare">
                                                                <span data-toggle="tooltip" data-placement="bottom"
                                                                    title="Add to compare" class="icon-shuffle"></span>
                                                            </a>
                                                        </li> -->
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#modal-product{{$product->id}}">
                                                                <span data-toggle="tooltip" data-placement="bottom"
                                                                    title="Quick view" class="icon-magnifier"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!-- product links end-->
                                                </div>
                                                <br>
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="{{route('product.show', $product->id)}}">{{$product->name}}</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    @foreach($product->prices as $price)
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="product-price">{{$price['price']}} EGP</h6>
                                                        <button class="pro-btn" data-toggle="modal"
                                                            data-target="#add-to-cart"><i class="icon-basket"></i></button>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-list End -->
                                    </div>
                                </div>
                                @endforeach
                                <!-- slider-item end -->
                            </div>
                        </div>

                        @foreach($productes as $product)
                        <!-- modal Product -->
                        <div class="modal fade theme1 style1" id="modal-product{{$product->id}}">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-8 mx-auto col-lg-5 mb-5 mb-lg-0">
                                                <div class="product-sync-init mb-20">
                                                    <div class="single-product">
                                                        <div class="product-thumb">
                                                            <img src="{{asset('factory_logos/'.$product->img_1)}}" alt="product-thumb">
                                                        </div>
                                                    </div>
                                                    <!-- single-product end -->
                                                    <div class="single-product">
                                                        <div class="product-thumb">
                                                            <img src="{{asset('factory_logos/'.$product->img_2)}}" alt="product-thumb">
                                                        </div>
                                                    </div>
                                                    <!-- single-product end -->
                                                    <div class="single-product">
                                                        <div class="product-thumb">
                                                            <img src="{{asset('factory_logos/'.$product->img_4)}}" alt="product-thumb">
                                                        </div>
                                                    </div>
                                                    <!-- single-product end -->
                                                    <div class="single-product">
                                                        <div class="product-thumb">
                                                            <img src="{{asset('factory_logos/'.$product->img_5)}}" alt="product-thumb">
                                                        </div>
                                                    </div>
                                                    <!-- single-product end -->
                                                </div>

                                                <div class="product-sync-nav">
                                                    <div class="single-product">
                                                        <div class="product-thumb">
                                                            <a href="javascript:void(0)"> <img src="{{asset('factory_logos/'.$product->img_1)}}"
                                                                    alt="product-thumb"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product end -->
                                                    <div class="single-product">
                                                        <div class="product-thumb">
                                                            <a href="javascript:void(0)"> <img src="{{asset('factory_logos/'.$product->img_2)}}"
                                                                    alt="product-thumb"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product end -->
                                                    <div class="single-product">
                                                        <div class="product-thumb">
                                                            <a href="javascript:void(0)"><img src="{{asset('factory_logos/'.$product->img_3)}}"
                                                                    alt="product-thumb"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product end -->
                                                    <div class="single-product">
                                                        <div class="product-thumb">
                                                            <a href="javascript:void(0)"><img src="{{asset('factory_logos/'.$product->img_4)}}"
                                                                    alt="product-thumb"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product end -->
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-7 mt-5 mt-md-0">
                                                <div class="modal-product-info">
                                                    <div class="product-head">
                                                        <h2 class="title">{{$product->name}}</h2>
                                                        <!-- <h4 class="sub-title">Reference: demo_11</h4> -->
                                                        <div class="star-content mb-20">
                                                            <span class="star-on"><i class="fas fa-star"></i> </span>
                                                            <span class="star-on"><i class="fas fa-star"></i> </span>
                                                            <span class="star-on"><i class="fas fa-star"></i> </span>
                                                            <span class="star-on"><i class="fas fa-star"></i> </span>
                                                            <span class="star-on de-selected"><i class="fas fa-star"></i> </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-body mb-50">
                                                        @foreach($product->prices as $price)
                                                        <span class="product-price text-center"> <span class="new-price">{{$price->price}} EGP</span>
                                                        @endforeach
                                                        </span>
                                                        <p>{{$product->prod_desc}}</p>
                                                        <!-- <ul>
                                                            <li>Predecessor: None.</li>
                                                            <li>Support Type: Neutral.</li>
                                                            <li>Cushioning: High energizing cushioning.</li>
                                                        </ul> -->
                                                    </div>
                                                    <div class="product-footer">
                                                        <div class="product-count style d-flex flex-column flex-sm-row my-4">
                                                            <div class="count d-flex">
                                                                <input type="number" min="1" max="{{$product->min_quantity}}" step="1" value="1">
                                                                <div class="button-group">
                                                                    <button class="count-btn increment"><i
                                                                            class="fas fa-chevron-up"></i></button>
                                                                    <button class="count-btn decrement"><i
                                                                            class="fas fa-chevron-down"></i></button>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <button class="btn theme-btn--dark1 btn--xl mt-5 mt-sm-0 rounded-5">
                                                                    <span class="mr-2"><i class="ion-android-add"></i></span>
                                                                    Add to cart
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="addto-whish-list">
                                                            <a href="{{route('cart')}}"><i class="icon-heart"></i> Add to wishlist</a>
                                                            <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                                                        </div>
                                                        <div class="pro-social-links mt-10">
                                                            <ul class="d-flex align-items-center">
                                                                <li class="share">Share</li>
                                                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                                                <li><a href="#"><i class="ion-social-google"></i></a></li>
                                                                <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    </section>
    <!-- product tab end -->
    

@endsection