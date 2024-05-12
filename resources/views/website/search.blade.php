@extends('website.master')
@section('title', 'Al-Ftooh | Search Page')
@section('body')

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>search</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/main') }}">Home</a></li>
                            <li class="breadcrumb-item active">search</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="mycard">
                    <div class="collection-product-wrapper">
                        <div class=" product-wrapper-grid">
                            <div class=" row margin-res">
                                @foreach ($products as $product)
                                    <div class="col-xl-3 col-6 col-grid-box">
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="{{ route('product.show', $product->id) }}">
                                                        <img
                                                            src="{{ url('public/products/' . $product->image_temp) }}"
                                                            class="img-fluid blur-up lazyload bg-img"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="{{ route('product.show', $product->id) }}">
                                                        <img
                                                            src="{{ url('public/products/' . $product->image_temp) }}"
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
                                {{--                                                <div class="product-pagination">--}}
                                {{--                                                    <div class="theme-pagination-block">--}}
                                {{--                                                        <div class="row">--}}
                                {{--                                                            <div class="col-xl-6 col-md-6 col-sm-12">--}}
                                {{--                                                                {{$products->links(pagination::tailwind)}}--}}
                                {{--                                                            </div>--}}
                                {{--                                                            <div class="col-xl-6 col-md-6 col-sm-12">--}}
                                {{--                                                                <div class="product-search-count-bottom">--}}
                                {{--                                                                    <h5>Showing Products {{$products->firstItem()}}--}}
                                {{--                                                                        -{{$products->lastItem()}}--}}
                                {{--                                                                        of {{$products->total()}} Result</h5>--}}
                                {{--                                                                </div>--}}
                                {{--                                                            </div>--}}
                                {{--                                                        </div>--}}
                                {{--                                                    </div>--}}
                                {{--                                                </div>--}}

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
    </section>
@endsection
