@extends('website.includes.master')
@section('title', "$shop->slug")
@section('body')
<div class="breadcumb-wrapper" data-bg-src="{{ url('public/shops/' . $shop->cover) }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title text-center">{{$shop->name}}</h1>

        </div>
    </div>
</div>

<section class="th-product-wrapper product-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="product-thumb-area">
                    <div class="product-thumb-tab" data-asnavfor=".product-big-img">
                        @foreach ($product->images as $image )
                        <div class="tab-btn active">
                            <img src="{{url('public/products/'.$image->name)}}" alt="Product Thumb">
                        </div>
                        @endforeach
                    </div>
                    <div class="product-big-img th-carousel" data-slide-show="1" data-md-slide-show="1" data-fade="true">
                        @foreach ($product->images as $image )
                        <div class="col-auto">
                            <div class="img"><img src="{{url('public/products/'.$image->name)}}" alt="Product Image"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="col-lg-5 align-self-center">
                <div class="product-about">
                    <h2 class="product-title">{{$product->name}}</h2>
                    <p class="price">{{$product->finalprice}} {{$shop->currency->name}}<del>{{$product->price}} {{$shop->currency->name}}</del></p>
                    <p class="text">{!!$product->details!!}</p>
                    <div class="actions">
                        <button  data-product-id="{{ $product->id }}" type="button" class="th-btn add_cart">Add to Cart</button>
                    </div>
                    <div class="product_meta">
                        <span class="posted_in">Category: <a href="shop.html" rel="tag">{{$product->category->name}}</a></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('scripts')
<script>
    // Update the existing script to handle the "Add to Cart" button click
$(document).ready(function () {

    deleteOrder();

$(document).on("click", ".add_cart", function (e) {
e.preventDefault();

var productId = $(this).data('product-id');


$.ajax({
    url: '/Menu/add-to-cart/' + productId,
    method: 'GET',
    dataType: 'json',
    success: function (response) {
        alert(response.success); // or display a success message in your UI

		$("#noticart").html("");



			   if (response.cartLength > 0) {
    for (const key in response.cart) {
        const order = response.cart[key];
		const productId = key;
        $("#noticart").append(`
            <li class="woocommerce-mini-cart-item mini_cart_item">
                <a href="#" type="button"  data-id="${productId}" class="remove remove_from_cart_button remove-from-cart mego"><i class="far fa-times"></i></a>
                <a href="/Menu/product/${productId}"><img src="{{ url('/public/products') }}/${order.image}" alt="Cart Image">${order.name}</a>
                <span class="quantity">${order.quantity} ×
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">${order.price}</span> {{$shop->currency->name}}</span>
                </span>
            </li>
        `);
    }
    $("#orderCount").text(response.cartLength);

}



        // Fetch and update the subtotal
        deleteOrder();
        updateSubtotal();
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
        console.log(ele.attr("data-id"));
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
                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                    <a data-id="${productId}" href="#" type="button" class="remove remove_from_cart_button remove-from-cart"><i class="far fa-times"></i></a>
                                    <a href="/Menu/product/${productId}"><img src="{{ url('/public/products') }}/${order.image}" alt="Cart Image">${order.name}</a>
                                    <span class="quantity">${order.quantity} ×
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">${order.price}</span> {{$shop->currency->name}}</span>
                                    </span>
                                </li>
                            `);
                        }
                        $("#orderCount").text(response.cartLength);
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
        $('#subtotal').text( response.subtotal + ' {{$shop->currency->name}}');
    },
    error: function (error) {
        console.error('Error fetching subtotal:', error);
    }
});
}
});


</script>

@endsection
