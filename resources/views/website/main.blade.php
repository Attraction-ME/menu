@extends('website.master')
@section('title' , 'KNS | Home Page')
@section('body')




    <!-- Home slider -->
    <section class="pt-0 height-65">
        @if(session('message'))
            <div class=" session-message alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="slider-animate home-slider">
            @foreach($sliders as $slider)
                <div>
                    <div class="home">
                        <img src="{{ url('public/sliders/' . $slider->image) }}" alt="" class="bg-img blur-up lazyload">
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- Home slider end -->





    <!-- Paragraph-->
    <div class="title6 section-t-space">
        <h2 class="font-fraunces">kns pinoye shop</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="product-para">
                    <p class="text-center"> General Shop For All You Need </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Paragraph end -->


    <!-- product start -->
    <section class="bag-product pt-0 section-b-space ratio_square">
        <div class="container">
            <div class="row row-cols-xxl-6 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gy-sm-4 gy-3">
                @foreach($shopproducts as $product)
                    <div class="product-box product-wrap product-style-3">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="{{ route('product.show', $product->id) }}"><img alt=""
                                                                                         src="{{ url('public/products/' . $product->image_temp) }}"
                                                                                         class="img-fluid blur-up lazyload bg-img"></a>
                            </div>
                            <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-bs-toggle="modal"
                                                                                        data-bs-target="#quick-view"
                                                                                        title="Quick View"><i
                                        class="ti-search"
                                        aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i
                                        class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-info">

                            <a href="product-page(no-sidebar).html">
                                <h6>{{$product->name}}</h6>
                            </a>
                            <h4 class="price" data-usd="{{ $product->pricedollar }}" data-egp="{{ $product->price }}">{{$product->price}}</h4>
                            <div class="add-btn">
                                <a href="{{ route('add.to.cart', $product->id) }}" class="">
                                    <i class="ti-shopping-cart"></i> add to cart
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div style="
     text-align: center;
     padding-top: 25px;
        ">
            <a class="btn btn-warning" href="{{url('/shop/4')}}" role="button">kns pinoye products</a>
        </div>
    </section>
    <!-- product end -->


    <!-- Parallax banner -->
{{--    <section class="p-0 product-vertical overflow-hidden">--}}
{{--        <div class="full-banner parallax text-center p-left bg-theme">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 m-auto">--}}
{{--                        <div class="title6">--}}
{{--                            <h2 class="font-fraunces text-white">top collection</h2>--}}
{{--                        </div>--}}
{{--                        <div class="product-para">--}}
{{--                            <p class="text-center text-white">Lorem Ipsum is simply dummy text of the printing and--}}
{{--                                typesetting industry.--}}
{{--                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="slide-3 no-arrow slick-default-margin full-box">--}}
{{--                            <div class="theme-card center-align">--}}
{{--                                <div class="offer-slider">--}}
{{--                                    <div class="sec-1">--}}
{{--                                        <div class="product-box2">--}}
{{--                                            <div class="media">--}}
{{--                                                <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                             src="{{url('website/assets/images/pro/43.jpg')}}"--}}
{{--                                                                                             class="img-fluid blur-up lazyload "></a>--}}
{{--                                                <div class="media-body align-self-center">--}}
{{--                                                    <div class="rating"><i class="fa fa-star"></i> <i--}}
{{--                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>--}}
{{--                                                    <a href="product-page(no-sidebar).html">--}}
{{--                                                        <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                                    </a>--}}
{{--                                                    <h4>$500.00--}}
{{--                                                        <del>$600.00</del>--}}
{{--                                                    </h4>--}}
{{--                                                    <ul class="color-variant">--}}
{{--                                                        <li class="bg-light0"></li>--}}
{{--                                                        <li class="bg-light1"></li>--}}
{{--                                                        <li class="bg-light2"></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="theme-card center-align">--}}
{{--                                <div class="offer-slider">--}}
{{--                                    <div class="sec-1">--}}
{{--                                        <div class="product-box2">--}}
{{--                                            <div class="media">--}}
{{--                                                <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                             src="{{url('website/assets/images/pro2/21.jpg')}}"--}}
{{--                                                                                             class="img-fluid blur-up lazyload "></a>--}}
{{--                                                <div class="media-body align-self-center">--}}
{{--                                                    <div class="rating"><i class="fa fa-star"></i> <i--}}
{{--                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>--}}
{{--                                                    <a href="product-page(no-sidebar).html">--}}
{{--                                                        <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                                    </a>--}}
{{--                                                    <h4>$500.00--}}
{{--                                                        <del>$600.00</del>--}}
{{--                                                    </h4>--}}
{{--                                                    <ul class="color-variant">--}}
{{--                                                        <li class="bg-light0"></li>--}}
{{--                                                        <li class="bg-light1"></li>--}}
{{--                                                        <li class="bg-light2"></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="theme-card center-align">--}}
{{--                                <div class="offer-slider">--}}
{{--                                    <div class="sec-1">--}}
{{--                                        <div class="product-box2">--}}
{{--                                            <div class="media">--}}
{{--                                                <a href="product-page(no-sidebar).html"><img--}}
{{--                                                        class="img-fluid blur-up lazyload"--}}
{{--                                                        src="{{url('website/assets/images/pro2/44.jpg')}}" alt=""></a>--}}
{{--                                                <div class="media-body align-self-center">--}}
{{--                                                    <div class="rating"><i class="fa fa-star"></i> <i--}}
{{--                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>--}}
{{--                                                    <a href="product-page(no-sidebar).html">--}}
{{--                                                        <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                                    </a>--}}
{{--                                                    <h4>$500.00--}}
{{--                                                        <del>$600.00</del>--}}
{{--                                                    </h4>--}}
{{--                                                    <ul class="color-variant">--}}
{{--                                                        <li class="bg-light0"></li>--}}
{{--                                                        <li class="bg-light1"></li>--}}
{{--                                                        <li class="bg-light2"></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Parallax banner end -->


    <!-- product slider start -->
{{--    <section class="bag-product ratio_square">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="title-basic">--}}
{{--                        <h2 class="title font-fraunces"><i class="ti-bolt"></i>Don't Miss These</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="slide-6-product product-m no-arrow">--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{url('public/website/assets/images/marketplace/pro/43.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{ url('public/website/assets/images/marketplace/pro/44.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{ url('public/website/assets/images/marketplace/pro/45.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{ url('public/website/assets/images/marketplace/pro/46.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{ url('public/website/assets/images/marketplace/pro/47.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{ url('public/website/assets/images/marketplace/pro/48.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 section-t-space">--}}
{{--                    <div class="title-basic">--}}
{{--                        <h2 class="title font-fraunces"><i class="ti-bolt"></i> NEW PRODUCTS</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="slide-6-product product-m no-arrow">--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{ url('public/website/assets/images/marketplace/pro/49.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{ url('public/website/assets/images/marketplace/pro/50.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{ url('public/website/assets/images/marketplace/pro/1.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{ url('public/website/assets/images/marketplace/pro/2.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{ url('public/website/assets/images/marketplace/pro/3.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="product-box product-wrap product-style-3">--}}
{{--                            <div class="img-wrapper">--}}
{{--                                <div class="front">--}}
{{--                                    <a href="product-page(no-sidebar).html"><img alt=""--}}
{{--                                                                                 src="{{ url('public/website/assets/images/marketplace/pro/4.jpg')}}"--}}
{{--                                                                                 class="img-fluid blur-up lazyload bg-img"></a>--}}
{{--                                </div>--}}
{{--                                <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i--}}
{{--                                            class="ti-heart" aria-hidden="true"></i></a> <a href="#"--}}
{{--                                                                                            data-bs-toggle="modal"--}}
{{--                                                                                            data-bs-target="#quick-view"--}}
{{--                                                                                            title="Quick View"><i--}}
{{--                                            class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"--}}
{{--                                                                                             title="Compare"><i--}}
{{--                                            class="ti-reload" aria-hidden="true"></i></a></div>--}}
{{--                            </div>--}}
{{--                            <div class="product-info">--}}
{{--                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i--}}
{{--                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>--}}
{{--                                </div>--}}
{{--                                <a href="product-page(no-sidebar).html">--}}
{{--                                    <h6>Slim Fit Cotton Shirt</h6>--}}
{{--                                </a>--}}
{{--                                <h4>$500.00</h4>--}}
{{--                                <div class="add-btn">--}}
{{--                                    <a href="javascript:void(0)" class="">--}}
{{--                                        <i class="ti-shopping-cart"></i> add to cart--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <br>
    <!-- product slider end -->








@endsection

