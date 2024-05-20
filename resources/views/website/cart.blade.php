@extends('website.includes.master')
@section('title', 'cart')
@section('body')

    <div class="th-cart-wrapper  space-top space-extra-bottom bg-light">
        <div class="container">

            @if (session('success'))
                <div class="woocommerce-notices-wrapper">
                    <div class="woocommerce-message">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            @if (session('message'))
                <div class="woocommerce-notices-wrapper">
                    <div class="woocommerce-message">
                        {{ session('message') }}
                    </div>
                </div>
            @endif

            <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data"
                class="woocommerce-cart-form">
                @csrf
                <table id="cart" class="cart_table" style="border-collapse: collapse">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-col-productname">Product Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                            <th class="cart-col-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <input type="hidden" name="latitude" id="latitude">
                        <input type="hidden" name="longitude" id="longitude">
                        @php $total = 0 @endphp
                        @if (session('cart'))
                            @foreach (session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                                <tr data-id="{{ $id }}" class="cart_item" style="border-bottom: 2px solid #aaaaaa">
                                    <td data-th="Product" data-title="Product">
                                        <a class="cart-productimage" href="#"><img width="91" height="91"
                                                src="{{ url('products/' . $details['image']) }}" alt="Image"></a>
                                        <input type="hidden" name="shop_id" class="form-control"
                                            value="{{ $details['shop_id'] }}">
                                        <input type="hidden" name="product_id[]" class="form-control"
                                            value="{{ $id }}">
                                        <input type="hidden" name="price[]" class="form-control"
                                            value="{{ $details['price'] }}">
                                        <input type="hidden" name="quantity[]" class="form-control"
                                            value="{{ $details['quantity'] }}">
                                        <input type="hidden" name="subtotal[]" class="form-control"
                                            value="{{ $details['price'] * $details['quantity'] }}">
                                        <input type="hidden" name="total" class="form-control"
                                            value="{{ $total }}">
                                        <input type="hidden" name="table_id" class="form-control"
                                            value="{{ $table->id }}">
                                        <input type="hidden" name="waiter_id" class="form-control"
                                            value="{{ $selectWaiter->id }}">
                                        <input type="hidden" name="main_option_id[]" class="form-control"
                                            value="{{ $details['mainOptionId'] }}">
                                        <input type="hidden" name="extra_option_ids[]" class="form-control"
                                            value="{{ json_encode($details['extraOptionIds']) }}" >
                                    </td>
                                    <td data-title="Name">
                                        <a class="cart-productname" href="#">{{ $details['name'] }}</a>
                                    </td>
                                    <td data-title="Price">
                                        <span class="amount"><bdi>{{ $details['price'] }}
                                                {{ $shop->currency->name }}</bdi></span>
                                    </td>
                                    <td data-title="Quantity">
                                        <div class="quantity">
                                            <button class="quantity-minus qty-btn update-cart"><i
                                                    class="far fa-minus"></i></button>
                                            <input type="number" class="qty-input update-cart quantitty"
                                                value="{{ $details['quantity'] }}">
                                            <button class="quantity-plus qty-btn update-cart"><i
                                                    class="far fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td data-title="Total">
                                        <span class="amount"><bdi>{{ $details['price'] * $details['quantity'] }}
                                                {{ $shop->currency->name }}</bdi></span>
                                    </td>
                                    <td data-title="Remove">
                                        <a href="#" class="remove remove-from-cartt"><i
                                                class="fal fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        @endif

                    </tbody>
                </table>
                <div class="row justify-content-end">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <h2 class="h4 summary-title">Cart Total</h2>
                        <table class="cart_totals">
                            <tfoot>
                                <tr>
                                    <td>Table No :</td>
                                    <td data-title="Cart Subtotal">
                                        <span class="amount"><bdi>{{ $table->name }}</bdi></span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <th>Waiter :</th>
                                    <td data-title="Shipping and Handling">
                                        <span class="amount"><bdi>{{ $selectWaiter->name }}</bdi></span>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <td>Order Total :</td>
                                    <td data-title="Total">
                                        <strong><span class="amount"><bdi>{{ $total }}
                                                    {{ $shop->currency->name }}</bdi></span></strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="wc-proceed-to-checkout col-6">
                        <a href="{{ route('website.welcome', $shop->slug) }}" class="th-btn rounded-2">Continue Order</a>
                    </div>
                    <div class="wc-proceed-to-checkout col-6">
                        <button type="submit" class="th-btn rounded-2 bg-success">Confirm Order</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
@section('scripts')

    <script>
        // Get client's location
        // if ('geolocation' in navigator) {
        //     navigator.geolocation.getCurrentPosition(
        //         function(position) {
        //             // Assuming you have an order form with relevant inputs
        //             document.getElementById('latitude').value = position.coords.latitude;
        //             document.getElementById('longitude').value = position.coords.longitude;
        //         },
        //         function(error) {
        //             alert('Error getting location: ' + error.message);
        //         }
        //     );
        // }
    </script>

    <script type="text/javascript">
        {{-- $(".update-cart").change(function (e) { --}}

        {{--    e.preventDefault(); --}}

        {{--    var ele = $(this); --}}
        {{--    var quantity = ele.closest("td").find(".quantity .qty-input").val(); --}}
        {{--    console.log(quantity); --}}



        {{--    $.ajax({ --}}
        {{--        url: '{{ route('update.cart') }}', --}}
        {{--        method: "patch", --}}
        {{--        data: { --}}
        {{--            _token: '{{ csrf_token() }}', --}}
        {{--            id: ele.parents("tr").attr("data-id"), --}}
        {{--            quantity: quantity --}}
        {{--        }, --}}
        {{--        success: function (response) { --}}
        {{--        } --}}
        {{--    }); --}}

        {{-- }); --}}
        $(".update-cart").click(function(e) {

            e.preventDefault();

            var ele = $(this);
            var quantity = ele.closest("td").find(".quantity .qty-input").val();


            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: quantity
                },
                success: function(response) {
                    window.location.reload();
                }
            });

        });


        $(".remove-from-cartt").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();

                    }
                });
            }
        });
    </script>

@endsection
