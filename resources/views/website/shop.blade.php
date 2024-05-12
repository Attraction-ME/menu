@extends('website.includes.master')
@section('title', "$shop->slug")
@section('body')
    <!-- Search Screen Start -->

    <section id="noresult-screen">

        <div class="container">
            @if(session('done'))
                <div class="woocommerce-notices-wrapper">
                    <div class="woocommerce-message">
                        {{ session('done') }}
                    </div>
                </div>
            @endif
            <div class="homescreen-third-sec" >
                <img class="homescreen-third-seccc" src="{{ url('shops/' . $shop->cover) }}">
            </div>
            <div class="noresult-screen-full">
                <form  action="#" method="POST" class="search-form w-100">
                    @csrf
                    @method('GET')
                <div class="input-group search-page-searchbar ">
						<span style="    height: 30px;border-radius: 0;" class="input-group-text search-iconn">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M10.9395 1.9313C5.98074 1.9313 1.94141 5.97063 1.94141 10.9294C1.94141 15.8881 5.98074 19.9353 10.9395 19.9353C13.0575 19.9353 15.0054 19.193 16.5449 17.9606L20.293 21.7067C20.4821 21.888 20.7347 21.988 20.9967 21.9854C21.2587 21.9827 21.5093 21.8775 21.6947 21.6924C21.8801 21.5073 21.9856 21.2569 21.9886 20.9949C21.9917 20.7329 21.892 20.4802 21.7109 20.2908L17.9629 16.5427C19.1963 15.0008 19.9395 13.0498 19.9395 10.9294C19.9395 5.97063 15.8982 1.9313 10.9395 1.9313ZM10.9395 3.93134C14.8173 3.93134 17.9375 7.05153 17.9375 10.9294C17.9375 14.8072 14.8173 17.9352 10.9395 17.9352C7.06162 17.9352 3.94141 14.8072 3.94141 10.9294C3.94141 7.05153 7.06162 3.93134 10.9395 3.93134Z" fill="#000000"></path>
							</svg>
						</span>

                        <input style="height: 30px !important;" type="text" id="search" name="keyword"  placeholder="Search..." autocomplete="off" class="form-control search-text" >
                        <input type="hidden" name="shop_id" value="{{ $shop->id }}" id="search_shop">

                </div>
                </form>
            </div>
        </div>

        <div class="noresult-screen-details">
            <div class="noresult-screen-details">
                <div class="noresult-screen-details-bottom ">
                    <div class="noresult-screen-details-full">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel"  tabindex="0">
                                <div class="search-full">
                                    <div class="container">
                                        <div class="mycard wishlist-wrapper-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="noresult-screen-details">
            <div class="noresult-screen-details">
                <div class="noresult-screen-details-bottom ">
                    <div class="noresult-screen-details-full">
                        <ul class="nav nav-pills mb-3" id="no-result-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active custom-home1-tab-btn category"  id="mc-submit" value="all" type="button" role="tab"  aria-selected="true">All Meals</button>
                            </li>
                            @foreach($shop->categories as $category)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link custom-home1-tab-btn category" id="mc-submit" value="{{$category->id}}"  type="button" role="tab"  aria-selected="false">{{$category->name}}</button>
                                    <input type="hidden" id="shopId" class="form-control" name="shop_id" value="{{$shop->id}}">
                                </li>
                            @endforeach


                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel"  tabindex="0">
                                <div class="search-full">
                                    <div class="container">

                                        <div id="products" class="wishlist-wrapper-full">

                                            @foreach($shop->product as $product)
                                                <div style="background-color: #343537 !important;" class="shoes-screen-wrapper">
                                                    <div class="shoes-screen-top">
                                                        <div class="shoes-img wishlist-img">
                                                            <a type="button" href="#" class="border-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$product->id}}">
                                                                <img style="height: 100px !important;" src="{{ url('products/' .$product->image_temp) }}" alt="{{$product->name}}">
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div  class="shoes-screen-bottom">
                                                        <div class="shoes-screen-bottom-full">
                                                            <div class="shoes-screen-first">
                                                                <a type="button" href="#" class="border-0 " data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$product->id}}">
                                                                    <h3>{{$product->name}}</h3>
                                                                </a>
                                                            </div>
                                                            <div style="padding: 8px !important;" class="shoes-screen-second">
                                                                <div class="cloth-txt1">
                                                                    <span>{{$product->finalprice}} {{$shop->currency->name}}</span>
                                                                </div>
                                                                <div class="shoes-screen-second-full">
                                                                    <button type="button" data-product-id="{{ $product->id }}" style="background-color: red !important;"  class="border-0 center align-content-center text-center add_cart " >
                                                                        <i class="fa fa-plus" style="color: white !important;"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" style="top: 3% !important;" id="staticBackdrop{{$product->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-dark">
                                                                    <h5 style="color: white !important;" class="modal-title" id="staticBackdropLabel">Details</h5>
                                                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body bg-dark">
                                                                    <section id="single-clothes-page">
                                                                        <div class="single-clothes-page-full">
                                                                            <div class="cloths-first-sec">
                                                                                <div id="carouselExampleIndicators" class="carousel slide single-clothes-slider" data-bs-ride="carousel">
                                                                                    <div class="carousel-inner">
                                                                                        @foreach ($product->images as $image )
                                                                                            <div class="carousel-item active">
                                                                                                <div class="single-clothes-slide-img">
                                                                                                    <img style="height: 200px !important;" src="{{url('products/'.$image->name)}}" alt="img">
                                                                                                </div>

                                                                                            </div>
                                                                                        @endforeach


                                                                                    </div>
                                                                                    <button class="carousel-control-prev single-slider-btn-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<mask id="mask0_330_4105" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
											<rect width="24" height="24" fill="white"/>
										</mask>
										<g mask="url(#mask0_330_4105)">
											<path d="M15 18L9 12L15 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</g>
									</svg>
								</span>
                                                                                    </button>
                                                                                    <button class="carousel-control-next single-slider-btn-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
								<span>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<mask id="mask0_330_4109" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
											<rect width="24" height="24" fill="white"/>
										</mask>
										<g mask="url(#mask0_330_4109)">
											<path d="M9 6L15 12L9 18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</g>
									</svg>
								</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cloths-second-sec">
                                                                                <div class="container">
                                                                                    <div class="cloths-second-sec-full">
                                                                                        <div class="cloths-second-wrapper">
                                                                                            <h1 class="clo-txt1">{{$product->name}}</h1>

                                                                                        </div>
                                                                                        <div class="single-cloth-border"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cloth-third-sec">
                                                                                <div class="container">
                                                                                    <h2 class="d-none">Clothse Details</h2>
                                                                                    <div class="cloth-third-sec-full">
                                                                                        <h3 class="des-txt1">Description</h3>
                                                                                        <div class="w-100">
                                                                                            <p class="des-txt2">
                                                                                                {!!$product->details!!}
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="single-cloth-border"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cloth-third-sec">
                                                                                <div class="container">
                                                                                    <div class="clothes-sixth-wrap">
                                                                                        <div class="clothes-sixth-full">
                                                                                            <div class="cloth-price-sec">
                                                                                                <span class="price-sec1">Price:</span>
                                                                                                <span class="price-sec2">{{$product->finalprice}} {{$shop->currency->name}}</span>
                                                                                            </div>
                                                                                            <div class="cloths-increment-sec">
                                                                                                <div class="product-incre">
                                                                                                    <a href="javascript:void(0)" class="product__minus sub">
												<span>
													<svg width="8" height="8" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M1 1H7" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</span>
                                                                                                    </a>
                                                                                                    <input name="quantity" type="text" class="w-100 product__input" value="1">
                                                                                                    <a href="javascript:void(0)" class="product__plus add">
												<span>
													<svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M1 4H7" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M4 7V1" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="add-to-cart-cloth-btn text-center ">
                                                                                            <button class="th-btn add_cart w-100" data-product-id="{{ $product->id }}" type="button" >Add To Cart</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Screen End -->

    <!--Bottom TabBar Section Start -->
    <div class="bottom-tabbar">
        <div class="bottom-tabbar-full">
            <nav>


                <a class="active"  data-bs-toggle="modal" data-bs-target="#staticBackdrop02">
                    <span style="border-radius: 5px !important;" class="bg-white text-center ">
                         <span class="text-black p-1" id="orderCount">
							{{ count((array) session('cart')) }}
                    </span>

                    </span>


                    <span>
							View Cart
                    </span>
                    @php $total = 0 @endphp
                    @foreach((array) session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                    @endforeach
                    <span style="margin-left: 25%">
                        SubTotal:
						</span>
                    <span class="" id="subtotal">{{ $total }} {{$shop->currency->name}}</span>
                </a>
                <div style="font-size: 10px !important;" class="text-white text-center">COPYRIGHT © 2024 BY ATTRACTIONME. All Rights Reserved</div>


                <div class="modal fade" style="top: 15% !important;height: 600px !important;" id="staticBackdrop02" data-bs-backdrop="fixed" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5  class="modal-title" id="staticBackdropLabel">Cart</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <section id="cart-without-promocode">
                                    <div class="container">
                                        <h1 class="d-none">Cart Details</h1>
                                        <h2 class="d-none">Cart</h2>
                                        <div id="noticart" class="cart-without-promocode-full">
                                            @if(session('cart'))
                                                @foreach(session('cart') as $id => $details)
                                                    <div class="cart-without-promocode-first">
                                                        <div class="cart-without-promocode-first-full">
                                                            <div>
                                                                <div class="cart-without-img-sec">
                                                                    <img src="{{ url('products/' .$details['image']  ) }}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="cart-without-content-sec">
                                                                <div class="cart-without-content-sec-full">
                                                                    <a data-id="{{ $id }}" href="#"  class="remove remove_from_cart_button remove-from-cart"><i class="far fa-times"></i></a>
                                                                    <p class="price-code-txt1">{{ $details['name'] }}</p>
                                                                    <p class="price-code-txt2"> {{ $details['quantity'] }} × {{ $details['price'] }} {{$shop->currency->name}}  </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-boder mt-16"></div>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                        @php $total = 0 @endphp
                                        @foreach((array) session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                        @endforeach

                                        <div class="without-code-last mt-24">
                                            <div class="without-code-last-full">
                                                <div>
                                                    <p class="total-txt">Total:</p>
                                                    <p id="subtotal2" class="price-txt">{{ $total }} {{$shop->currency->name}}</p>
                                                </div>
                                                <div class="proceed-to check-btn">
                                                    <a class="w-100" href="{{ route('cart') }}">View Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    </div>

@endsection
@section('scripts')

<script>


        $('.category').on('click', function () {


            // Remove the 'active' class from all category buttons
            $('.category').removeClass('active');

            // Add the 'active' class to the clicked category button
            $(this).addClass('active');


            var cat_id = this.value;
            var shop_id = $('#shopId').val();

            $.ajax({
                url: "{{ url('productByCategory') }}",
                type: "GET",
                data: {
                    cat_id: cat_id,
                    shop_id: shop_id,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function (result) {

                    var category = result.category;
                    $("#cat_name").html(`
                <div class="th-menu">
                    <h2>${category.name}</h2>
                    </div>
                    `);
                    $("#products").html(productsHtml);


                    var productsHtml = '';

                    if (result.products.length === 0) {
                        $("#products").css({
                            'display': 'block',
                            "text-align": "center"
                        });
                        productsHtml = `
                    <h2 style="color:white;">Coming Soon!</h2>
                    `;

                    } else {
                        $("#products").css({
                            'display': '',
                            "text-align": ""
                        });
                        $.each(result.products, function (key, value) {
                            var productDiv = `
                         <div style="background-color: #343537 !important;" class="shoes-screen-wrapper">
                                                    <div class="shoes-screen-top">
                                                        <div class="shoes-img wishlist-img">
                                                            <a type="button" href="#" class="border-0" data-bs-toggle="modal" data-bs-target="#staticBackdropp${value.id}">
                                                                <img style="height: 100px !important;" src="${value.image_src}" alt="${value.image_alt}">
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="shoes-screen-bottom">
                                                        <div class="shoes-screen-bottom-full">
                                                            <div class="shoes-screen-first">
                                                                <a type="button" href="#" class="border-0 " data-bs-toggle="modal" data-bs-target="#staticBackdropp${value.id}">
                                                                    <h3>${value.name}</h3>
                                                                </a>
                                                            </div>
                                                            <div style="padding: 8px !important;" class="shoes-screen-second">
                                                                <div class="cloth-txt1">
                                                                    <span>${value.finalprice} ${value.currency}</span>
                                                                </div>
                                                                <div class="shoes-screen-second-full">
                                                                    <button type="button" data-product-id="${value.id}" style="background-color: red !important;"  class="border-0 center align-content-center text-center add_cart" >
                                                                        <i class="fa fa-plus" style="color: white !important;"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                        <div class="modal fade" style="top: 3% !important;" id="staticBackdropp${value.id}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header bg-dark">
                        <h5 style="color: white !important;" class="modal-title" id="staticBackdropLabel">Details</h5>
                        <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-dark">
                        <section id="single-clothes-page">
                        <div class="single-clothes-page-full">
                        <div class="cloths-first-sec">
                        <div id="carouselExampleIndicators" class="carousel slide single-clothes-slider" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="single-clothes-slide-img">
                        <img style="height: 200px !important;" src="${value.image_src}" alt="img">
                        </div>

                        </div>


                        </div>
                        <button class="carousel-control-prev single-slider-btn-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_330_4105" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"/>
                        </mask>
                        <g mask="url(#mask0_330_4105)">
                        <path d="M15 18L9 12L15 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        </svg>
                        </span>
                        </button>
                        <button class="carousel-control-next single-slider-btn-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_330_4109" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"/>
                        </mask>
                        <g mask="url(#mask0_330_4109)">
                        <path d="M9 6L15 12L9 18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        </svg>
                        </span>
                        </button>
                        </div>
                        </div>
                        <div class="cloths-second-sec">
                        <div class="container">
                        <div class="cloths-second-sec-full">
                        <div class="cloths-second-wrapper">
                        <h1 class="clo-txt1">${value.name}</h1>

                        </div>
                        <div class="single-cloth-border"></div>
                        </div>
                        </div>
                        </div>
                        <div class="cloth-third-sec">
                        <div class="container">
                        <h2 class="d-none">Clothse Details</h2>
                        <div class="cloth-third-sec-full">
                        <h3 class="des-txt1">Description</h3>
                        <div class="w-100">
                        <p class="des-txt2">
                        ${value.details}
                        </p>
                        </div>
                        <div class="single-cloth-border"></div>
                        </div>
                        </div>
                        </div>
                        <div class="cloth-third-sec">
                        <div class="container">
                        <div class="clothes-sixth-wrap">
                        <div class="clothes-sixth-full">
                        <div class="cloth-price-sec">
                        <span class="price-sec1">Price:</span>
                        <span class="price-sec2">${value.finalprice} ${value.currency}</span>
                        </div>
                        <div class="cloths-increment-sec">
                        <div class="product-incre">
                        <a href="javascript:void(0)" class="product__minus sub">
                        <span>
                        <svg width="8" height="8" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1H7" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        </span>
                        </a>
                        <input name="quantity" type="text" class="w-100 product__input" value="1">
                        <a href="javascript:void(0)" class="product__plus add">
                        <span>
                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4H7" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M4 7V1" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        </span>
                        </a>
                        </div>
                        </div>
                        </div>
                        <div class="add-to-cart-cloth-btn text-center ">
                        <button class="th-btn add_cart w-100" data-product-id="${value.id}" type="button" >Add To Cart</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </section>
                        </div>

                        </div>
                        </div>
                        </div>
                        </div>
                                                </div>
                       `;
                            productsHtml += productDiv;


                        });

                    }


                    $("#products").html(productsHtml);
                        $('.product__plus').on("click", function (e) {
                            e.preventDefault();
                            var $qty = $(this).siblings(".product__input");
                            var currentVal = parseInt($qty.val(), 10);
                            if (!isNaN(currentVal)) {
                                $qty.val(currentVal + 1);
                            }
                        });

                        $('.product__minus').on("click", function (e) {
                            e.preventDefault();
                            var $qty = $(this).siblings(".product__input");
                            var currentVal = parseInt($qty.val(), 10);
                            if (!isNaN(currentVal) && currentVal > 1) {
                                $qty.val(currentVal - 1);
                            }
                        });



                }
            });
        });

</script>

<script>
    var debounceTimer;

    $('#search').on('keyup', function () {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(search, 300);
    });
    search();


    function search() {

        var keyword = $('#search').val();
        var shop_id = $('#search_shop').val();
        if (keyword.trim() === '') {
            // Clear the table when the keyword is empty
            $('.mycard').html('');
            return;
        }



        $.post('{{ route("website.shop") }}',
            {

                _token: '{{ csrf_token()}}',
                keyword: keyword,
                shop_id: shop_id,

            },


            function (data) {

                table_post_row(data);

            });
    }

    const productShowRoute = "{{ route('product.show', ':productId') }}";
    const productcartRoute = "{{ route('add.to.cart', ':productId') }}";

    // table row with ajax
    function table_post_row(res) {
        let htmlView = '';

        if (res.products.length <= 0) {
            $('.mycard').html(`<h5 style="color: red;text-align: center;padding-top: 10px;" class="product-detail col-12">No Data.</h5>`);
        } else {

            for (let i = 0; i < res.products.length; i++) {
                const productLink = productShowRoute.replace(':productId', res.products[i].id);
                const productCart = productcartRoute.replace(':productId', res.products[i].id);


                htmlView += `
                                         <div style="background-color: #343537 !important;" class="shoes-screen-wrapper">
                                                    <div class="shoes-screen-top">
                                                        <div class="shoes-img wishlist-img">
                                                            <a type="button" href="#" class="border-0" data-bs-toggle="modal" data-bs-target="#staticBackdroppp${res.products[i].id}">
                                                                <img style="height: 100px !important;" src="{{url('products/${res.products[i].image_temp}')}}" alt="product">
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="shoes-screen-bottom">
                                                        <div class="shoes-screen-bottom-full">
                                                            <div class="shoes-screen-first">
                                                                <a type="button" href="#" class="border-0 " data-bs-toggle="modal" data-bs-target="#staticBackdroppp${res.products[i].id}">
                                                                    <h3>${res.products[i].name}</h3>
                                                                </a>
                                                            </div>
                                                            <div style="padding: 8px !important;" class="shoes-screen-second">
                                                                <div class="cloth-txt1">
                                                                    <span>${res.products[i].finalprice}{{$shop->currency->name}}</span>
                                                                </div>
                                                                <div class="shoes-screen-second-full">
                                                                    <button type="button" data-product-id="${res.products[i].id}" style="background-color: red !important;"  class="border-0 center align-content-center text-center add_cart" >
                                                                        <i class="fa fa-plus" style="color: white !important;"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                        <div class="modal fade" style="top: 3% !important;" id="staticBackdroppp${res.products[i].id}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header bg-dark">
                        <h5 style="color: white !important;" class="modal-title" id="staticBackdropLabel">Details</h5>
                        <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-dark">
                        <section id="single-clothes-page">
                        <div class="single-clothes-page-full">
                        <div class="cloths-first-sec">
                        <div id="carouselExampleIndicators" class="carousel slide single-clothes-slider" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="single-clothes-slide-img">
                        <img style="height: 200px !important;" src="{{url('products/${res.products[i].image_temp}')}}" alt="img">
                        </div>

                        </div>


                        </div>
                        <button class="carousel-control-prev single-slider-btn-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_330_4105" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"/>
                        </mask>
                        <g mask="url(#mask0_330_4105)">
                        <path d="M15 18L9 12L15 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        </svg>
                        </span>
                        </button>
                        <button class="carousel-control-next single-slider-btn-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_330_4109" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="white"/>
                        </mask>
                        <g mask="url(#mask0_330_4109)">
                        <path d="M9 6L15 12L9 18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        </svg>
                        </span>
                        </button>
                        </div>
                        </div>
                        <div class="cloths-second-sec">
                        <div class="container">
                        <div class="cloths-second-sec-full">
                        <div class="cloths-second-wrapper">
                        <h1 class="clo-txt1">${res.products[i].name}</h1>

                        </div>
                        <div class="single-cloth-border"></div>
                        </div>
                        </div>
                        </div>
                        <div class="cloth-third-sec">
                        <div class="container">
                        <h2 class="d-none">Clothse Details</h2>
                        <div class="cloth-third-sec-full">
                        <h3 class="des-txt1">Description</h3>
                        <div class="w-100">
                        <p class="des-txt2">
                        ${res.products[i].details}
                        </p>
                        </div>
                        <div class="single-cloth-border"></div>
                        </div>
                        </div>
                        </div>
                        <div class="cloth-third-sec">
                        <div class="container">
                        <div class="clothes-sixth-wrap">
                        <div class="clothes-sixth-full">
                        <div class="cloth-price-sec">
                        <span class="price-sec1">Price:</span>
                        <span class="price-sec2">${res.products[i].finalprice}{{$shop->currency->name}}</span>
                        </div>
                        <div class="cloths-increment-sec">
                        <div class="product-incre">
                        <a href="javascript:void(0)" class="product__minuss sub">
                        <span>
                        <svg width="8" height="8" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1H7" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        </span>
                        </a>
                        <input name="quantity" type="text" class="w-100 product__input" value="1">
                        <a href="javascript:void(0)" class="product__pluss add">
                        <span>
                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 4H7" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M4 7V1" stroke="#707070" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        </span>
                        </a>
                        </div>
                        </div>
                        </div>
                        <div class="add-to-cart-cloth-btn text-center ">
                        <button class="th-btn add_cart w-100" data-product-id="${res.products[i].id}" type="button" >Add To Cart</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </section>
                        </div>

                        </div>
                        </div>
                        </div>
                        </div>
                                                </div>


`;
            }

            $('.mycard').html(htmlView);

            $('.product__pluss').on("click", function (e) {
                e.preventDefault();
                var $qty = $(this).siblings(".product__input");
                var currentVal = parseInt($qty.val(), 10);
                if (!isNaN(currentVal)) {
                    $qty.val(currentVal + 1);
                }
            });

            $('.product__minuss').on("click", function (e) {
                e.preventDefault();
                var $qty = $(this).siblings(".product__input");
                var currentVal = parseInt($qty.val(), 10);
                if (!isNaN(currentVal) && currentVal > 1) {
                    $qty.val(currentVal - 1);
                }
            });

        }



    }

</script>
<script>
    // Update the existing script to handle the "Add to Cart" button click
$(document).ready(function () {

    deleteOrder();

$(document).on("click", ".add_cart", function (e) {
e.preventDefault();

var productId = $(this).data('product-id');
// Find the nearest .qty-input relative to the clicked button
    var qtyInput = $(this).closest('.add-to-cart-cloth-btn').siblings('.clothes-sixth-full').find('.product__input');

    // Access the value of qtyInput
    var quantity = qtyInput.val();
    if (quantity === undefined){
        quantity = 1;
    }



$.ajax({
    url: '/add-to-cart/' + productId,
    method: 'GET',
    data: {
        quantity: quantity,
        _token: '{{ csrf_token() }}'
    },
    dataType: 'json',
    success: function (response) {

		$("#noticart").html("");



			   if (response.cartLength > 0) {
    for (const key in response.cart) {
        const order = response.cart[key];
		const productId = key;
        $("#noticart").append(`
         <div class="cart-without-promocode-first">
                                                        <div class="cart-without-promocode-first-full">
                                                            <div>
                                                                <div class="cart-without-img-sec">
                                                                    <img src="{{ url('/products') }}/${order.image}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="cart-without-content-sec">
                                                                <div class="cart-without-content-sec-full">
                                                                    <a data-id="${productId}" href="#"  class="remove remove_from_cart_button remove-from-cart"><i class="far fa-times"></i></a>
                                                                    <p class="price-code-txt1">${order.name}</p>
                                                                    <p class="price-code-txt2"> ${order.quantity} × ${order.price} {{$shop->currency->name}}  </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-boder mt-16"></div>
                                                    </div>

        `);
    }
    $("#orderCount").text(response.cartLength );

}



        // Fetch and update the subtotal
        deleteOrder();
        updateSubtotal();
        $('.modal').modal('hide');
        alert(response.success); // or display a success message in your UI


    },
    error: function (error) {
        alert(error.responseJSON.error); // or display an error message in your UI
    }
});
});





function deleteOrder() {
    $(".remove-from-cart").click(function (ev) {
        ev.preventDefault();
        var ele = $(this);
        if (confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.attr("data-id")
                },
                success: function (response) {

                    $("#noticart").html("");
                    $("#orderCount").text(0);


                    const notificationCount = response.cartLength;

                    if (response.cartLength > 0) {
                        for (const key in response.cart) {
                            const order = response.cart[key];
                            const productId = key;
                            $("#noticart").append(`
                               <div class="cart-without-promocode-first">
                                                        <div class="cart-without-promocode-first-full">
                                                            <div>
                                                                <div class="cart-without-img-sec">
                                                                    <img src="{{ url('/products') }}/${order.image}" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="cart-without-content-sec">
                                                                <div class="cart-without-content-sec-full">
                                                                    <a data-id="${productId}" href="#"  class="remove remove_from_cart_button remove-from-cart"><i class="far fa-times"></i></a>
                                                                    <p class="price-code-txt1">${order.name}</p>
                                                                    <p class="price-code-txt2"> ${order.quantity} × ${order.price} {{$shop->currency->name}}  </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-boder mt-16"></div>
                                                    </div>
                            `);
                        }
                        $("#orderCount").text( response.cartLength );
                    }

                    // Fetch and update the subtotal
                    updateSubtotal();
                    deleteOrder();


                }
            });
        }
    });
}

// Function to update the subtotal dynamically
function updateSubtotal() {
$.ajax({
    url: '{{ route('cart.get-subtotal') }}', // Replace with the actual route to fetch the subtotal
    method: 'GET',
    dataType: 'json',
    success: function (response) {
        $('#subtotal').text( response.subtotal + ' '+ ' {{$shop->currency->name}}');
        $('#subtotal2').text( response.subtotal +' '+ ' {{$shop->currency->name}}');

    },
    error: function (error) {
        console.error('Error fetching subtotal:', error);
    }
});
}
});


</script>



@endsection
