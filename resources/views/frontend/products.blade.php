@extends('layouts.frontend.master')
@section('content')
<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-15">
                    <h2 class="title text-dark text-capitalize">Products</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="product-tab bg-white pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mb-30">
                <div class="grid-nav-wraper bg-lighten2 mb-30">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            <nav class="shop-grid-nav">
                                <ul class="nav nav-pills align-items-center" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                            role="tab" aria-controls="pills-home" aria-selected="true">
                                            <i class="fa fa-th"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item mr-0">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                            href="#pills-profile" role="tab" aria-controls="pills-profile"
                                            aria-selected="false"><i class="fa fa-list"></i></a>
                                    </li>
                                    <!-- <li> <span class="total-products text-capitalize">There are 13 products.</span></li> -->
                                </ul>
                            </nav>
                        </div>
                        <!-- <div class="col-12 col-md-6 position-relative">
                            <div class="shop-grid-button d-flex align-items-center">
                                <span class="sort-by">Sort by:</span>
                                <button class="btn-dropdown rounded d-flex justify-content-between" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Relevance <span class="ion-android-arrow-dropdown"></span>
                                </button>
                                <div class="dropdown-menu shop-grid-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Relevance</a>
                                    <a class="dropdown-item" href="#"> Name, A to Z</a>
                                    <a class="dropdown-item" href="#"> Name, Z to A</a>
                                    <a class="dropdown-item" href="#"> Price, low to high</a>
                                    <a class="dropdown-item" href="#"> Price, high to low</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- product-tab-nav end -->
                <div class="tab-content" id="pills-tabContent">
                    <!-- first tab-pane -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row grid-view theme1">
                            @foreach($productes as $product)
                            <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="product-desc py-0">
                                            <!-- <h3 class="title"><a href="#">{{$product->name}}</a></h3> -->
                                        </div>
                                        <div class="product-thumbnail position-relative">
                                            <!-- <span class="badge badge-danger top-right">New</span> -->
                                            <a href="{{route('product.show',$product->id)}}">
                                                <img class="first-img" src="{{asset('product_images/'.$product['img_1'])}}" alt="thumbnail">
                                                <img class="second-img" src="{{asset('product_images/'.$product['img_1'])}}" alt="234">
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
                                            <h3 class="title"><a href="{{route('product.show',$product->id)}}">{{$product->name}}</a></h3>
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

                            <!-- first modal Product -->
                            <div class="modal fade theme1 style1" id="modal-product{{$product->id}}" tabindex="-1" role="dialog">
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
                                                                <img src="{{asset('product_images/'.$product->img_1)}}" alt="product-thumb">
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <img src="{{asset('product_images/'.$product->img_2)}}" alt="product-thumb">
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <img src="{{asset('product_images/'.$product->img_4)}}" alt="product-thumb">
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <img src="{{asset('product_images/'.$product->img_5)}}" alt="product-thumb">
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                    </div>

                                                    <div class="product-sync-nav">
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <a href="javascript:void(0)"> <img src="{{asset('product_images/'.$product->img_1)}}"
                                                                        alt="product-thumb"></a>
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <a href="javascript:void(0)"> <img src="{{asset('product_images/'.$product->img_2)}}"
                                                                        alt="product-thumb"></a>
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <a href="javascript:void(0)"><img src="{{asset('product_images/'.$product->img_3)}}"
                                                                        alt="product-thumb"></a>
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <a href="javascript:void(0)"><img src="{{asset('product_images/'.$product->img_4)}}"
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
                    <!-- second tab-pane -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="row grid-view-list theme1">
                            
                            @foreach($productes as $product)
                            <div class="col-12 mb-30">
                                <div class="card product-card">
                                    <div class="card-body">
                                        <div class="media flex-column flex-md-row">
                                            <div class="col-6">
                                                <div class="product-thumbnail position-relative">
                                                        <!-- <span class="badge badge-success top-left">-10%</span> -->
                                                        <!-- <span class="#">New</span> -->
                                                        <a href="{{route('product.show', $product->id)}}">
                                                            <img class="first-img" src="{{asset('product_images/'.$product->img_1)}}" alt="thumbnail">
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
                                                            <a href="#" data-toggle="modal" data-target="#modal-product2{{$product->id}}">
                                                                <span data-toggle="tooltip" data-placement="bottom"
                                                                    title="Quick view" class="icon-magnifier"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!-- product links end-->
                                                </div>
                                            </div>
                                            <div class="media-body pl-30">
                                                @foreach($product->prices as $price)
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="{{route('product.show',$product->id)}}">{{$product->name}} </a></h3>
                                                    <div class="star-rating mb-10">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <h6 class="product-price"><del class="del">{{$price->discount}} EGP</del>
                                                        <span class="onsale">{{$price->price}} EGP</span></h6>
                                                </div>
                                                @endforeach
                                                <ul class="product-list-des">
                                                    <li>{{$product->prod_desc}}</li>
                                                </ul>
                                                <div class="availability-list mb-30">
                                                    <p>Availability: <span>{{$product->min_quantity}} In Stock</span></p>
                                                </div>
                                                <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                    data-toggle="modal" data-target="#add-to-cart">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-list End -->
                            </div>

                            <!-- second modal Product -->
                            <div class="modal fade theme1 style1" id="modal-product2{{$product->id}}" tabindex="-1" role="dialog">
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
                                                                <img src="{{asset('product_images/'.$product->img_1)}}" alt="product-thumb">
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <img src="{{asset('product_images/'.$product->img_2)}}" alt="product-thumb">
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <img src="{{asset('product_images/'.$product->img_4)}}" alt="product-thumb">
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <img src="{{asset('product_images/'.$product->img_5)}}" alt="product-thumb">
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                    </div>

                                                    <div class="product-sync-nav">
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <a href="javascript:void(0)"> <img src="{{asset('product_images/'.$product->img_1)}}"
                                                                        alt="product-thumb"></a>
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <a href="javascript:void(0)"> <img src="{{asset('product_images/'.$product->img_2)}}"
                                                                        alt="product-thumb"></a>
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <a href="javascript:void(0)"><img src="{{asset('product_images/'.$product->img_3)}}"
                                                                        alt="product-thumb"></a>
                                                            </div>
                                                        </div>
                                                        <!-- single-product end -->
                                                        <div class="single-product">
                                                            <div class="product-thumb">
                                                                <a href="javascript:void(0)"><img src="{{asset('product_images/'.$product->img_4)}}"
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
                                                                    <input type="number" min="1" max="10" step="1" value="1">
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
                                                                <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
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
                <!-- <div class="row">
                    <div class="col-12">
                        <nav class="pagination-section mt-30">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-3 mb-30 order-lg-first">
                <aside class="left-sidebar theme1">
                    <!-- search-filter start -->
                    <div class="search-filter">
                        <form action="{{route('filterProduct')}}" method="get">
                            @csrf
                            <div class="check-box-inner mt-10">
                                <h4 class="title">Filter By</h4>

                                <!-- Category -->
                                <h4 class="sub-title pt-10">Factories</h4>
                                <select name="factoryid" id="factoryid" class="form-control">
                                    <option value="">- Select Factory -</option>
                                    @foreach($factories as $fact)
                                    <option value="{{$fact->id}}">{{$fact->name_en}}</option>
                                    @endforeach
                                </select>

                                <!-- Category -->
                                <h4 class="sub-title pt-10">Categories</h4>
                                <select name="categoryid" id="categoryid" class="form-control">
                                    <option value="">- Select Category -</option>
                                    @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name_en}}</option>
                                    @endforeach
                                </select>

                                <!-- Product -->
                                <h4 class="sub-title pt-10">Products</h4>
                                <select name="productid" id="productid" class="form-control">
                                    <option value="">- Select Product -</option>
                                    @foreach($allProduct as $prod)
                                    <option value="{{$prod->id}}">{{$prod->name}}</option>
                                    @endforeach
                                </select>
                                <br>
                                
                                <button type="submit" class="btn theme-btn--dark1 btn-block btn--xl rounded-5">Filter</button>
                            </div>
                        </form>
                    </div>
                    <!-- search-filter end -->
                    <!-- <div class="product-widget mb-60 mt-30">
                        <h3 class="title">Product Tags</h3>
                        <ul class="product-tag d-flex flex-wrap">
                            <li><a href="#">shopping</a></li>
                            <li><a href="#">New products</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">sale</a></li>
                        </ul>
                    </div> -->
                   
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->
@endsection