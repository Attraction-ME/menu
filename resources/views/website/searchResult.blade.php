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
                                        <input type="hidden" name="shop_id" value="{{ $shop_id }}" id="search_shop">
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
                <div class="mycard row">
                </div>
                <div class="">
                    <div class="table-data">
                        <h3 class="mobile-heading pt-5 t">Result</h3>
                    <div class=" product-wrapper-grid">
                        <div class=" row margin-res" id="productGrid">
                            @foreach ($data  as $product)
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 col-grid-box mb-3 ">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="{{ route('product.show', $product->id) }}"><img alt=""
                                                                                                     src="{{ url('public/products/' . $product->image_temp) }}"class="img-fluid blur-up lazyload bg-img"></a>
                                        </div>
                                    </div>
                                    <div class="product-box product-style-5">
                                        <a href="{{ route('product.show', $product->id) }}">
                                            <h6>{{$product->name}}</h6>
                                        </a>
                                        <h5 class="text-truncate">{{$product->category->name}}</h5>
                                        <h4>{{$product->price}} LE</h4>
                                        <div class="addtocart_btn pb-3">
                                            <a href="{{ route('add.to.cart', $product->id) }}"
                                               class="add-button add_cart" title="Add to cart">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            @endforeach

                            <nav class="pt-5" aria-label="Page navigation example"
                                 style="margin: 50px 0;">
                                <ul class="pagination justify-content-center">
                                    {{$data->links()}}
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
