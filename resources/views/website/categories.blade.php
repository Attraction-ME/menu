@extends('website.master')
@section('title', 'Al-Ftooh | Shop Page')
@section('body')

    <body class="theme-color-1">


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Shop</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/main') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <section class="search-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <form action="{{ route('website.searchResult') }}" method="POST" class="form-header">
                                    @csrf
                                    @method('GET')
                                    <div class="input-group">
                                        <input type="search" id="search" name="keyword" class="form-control"
                                               placeholder="Search Products..." autocomplete="off">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-solid"><i class="fa fa-search"></i>
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="#"><img src="{{ url('website/assets/images/mega-menu/2.jpg') }}"
                                                         class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="mycard">
                                    </div>

                                    <div class="collection-product-wrapper">
                                        <h3 class="mobile-heading pt-5 t">"{{ $category->name }}" Products</h3>
                                        <div class=" product-wrapper-grid">
                                            <div class=" row margin-res">
                                                @foreach ($products as $product)
                                                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 col-grid-box">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="{{ route('product.show', $product->id) }}">
                                                                        <img
                                                                            src="{{ url('products/' . $product->image_temp) }}"
                                                                            class="img-fluid blur-up lazyload bg-img"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="{{ route('product.show', $product->id) }}">
                                                                        <img
                                                                            src="{{ url('products/' . $product->image_temp) }}"
                                                                            class="img-fluid blur-up lazyload bg-img"
                                                                            alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail">
                                                                <div>
                                                                    <a href="{{ route('product.show', $product->id) }}">
                                                                        <h6>{{$product->name}}</h6>
                                                                    </a>
                                                                    <p>{{$product->details}}</p>
                                                                    <h4>AED {{$product->price}}</h4>
                                                                    <ul class="color-variant">
                                                                        <li class="bg-light0"></li>
                                                                        <li class="bg-light1"></li>
                                                                        <li class="bg-light2"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                                <nav class="pt-5" aria-label="Page navigation example"
                                                     style="margin: 50px 0;">
                                                    <ul class="pagination justify-content-center">
                                                        {{$products->links('pagination::tailwind')}}
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- section End -->
@endsection
