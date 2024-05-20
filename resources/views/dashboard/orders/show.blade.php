@extends('dashboard.master')
@section('title' , 'Show Order')
@section('body')

    <div class="content-header-left col-md-6 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Orders</a>
                    </li>
                    <li class="breadcrumb-item active">Order View
                    </li>
                </ol>
            </div>
        </div>
        <h3 class="content-header-title mb-0">Order</h3>
    </div>

    <div class="content-body">
        <!-- App invoice wrapper -->
        <section class="app-invoice-wrapper">
            <div class="row">
                <div class="col-xl-9 col-md-8 col-12 printable-content">
                    <!-- using a bootstrap card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body p-2">
                            <!-- card-header -->
                            <div class="card-header px-0">
                                <div class="row">
                                    <div class="col-md-12 col-lg-7 col-xl-4 mb-50">
                                        <span class="invoice-id font-weight-bold">Order# {{ $order->id }} </span>
                                    </div>
                                    <div class="col-md-12 col-lg-5 col-xl-8">
                                        <div
                                            class="d-flex align-items-center justify-content-end justify-content-xs-start">
                                            <div class="issue-date pr-2">
                                                <span class="font-weight-bold no-wrap">Date & Time: </span>
                                                <span>{{ $order->created_at }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- invoice logo and title -->
                            <div class="invoice-logo-title row py-2">
                                <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                                    <h2 class="text-primary">Order</h2>
                                    <span>{{$order->shop_order->name}} General Trading</span>
                                </div>
                                <div class="col-6 d-flex justify-content-end invoice-logo">
                                    <img src="{{ url('shops/' . $order->shop_order->image) }}"
                                         alt="company-logo" height="46" width="164">
                                </div>
                            </div>
                            <hr>

                            <!-- invoice address and contacts -->
                            <div class="row invoice-adress-info py-2">
                                <div class="col-6 mt-1 from-info">
                                    <div class="info-title mb-1">
                                        <span>Bill From</span>
                                    </div>
                                    <div class="company-name mb-1">
                                        <span class="text-muted">{{$order->shop_order->name}}</span>
                                    </div>
                                    <div class="company-address mb-1">
                                        <span class="text-muted">{{$order->shop_order->location}}</span>
                                    </div>

                                    <div class="company-phone  mb-1">
                                        <span class="text-muted">{{$order->shop_order->phone}}</span>
                                    </div>
                                </div>
                                <div class="col-6 mt-1 to-info">
                                    <div class="info-title mb-1">
                                        <span>Bill To</span>
                                    </div>
                                    <div class="company-name mb-1">
                                        <span class="text-muted">{{$order->customers->name}}</span>
                                    </div>
                                    <div class="company-address mb-1">
                                        <span class="text-muted">{{ $order->customers->address }}</span>
                                    </div>
                                    <div class="company-email mb-1">
                                        <span class="text-muted">{{ $order->customers->email }}</span>
                                    </div>
                                    <div class="company-phone  mb-1">
                                        <span class="text-muted">{{ $order->customers->phone }}</span>
                                    </div>
                                </div>
                            </div>

                            <!--product details table -->
                            <div class="product-details-table py-2 row ">
                                <div class="col-12">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Items</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Main Option</th>
                                        <th scope="col">Extra Options</th>                                        
                                        <th scope="col">Price</th>
                                        <th scope="col">Total</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order_details as $key => $order_detail)
                                        <tr>
                                            <td>{{ $key +1 }}</td>
                                            <td>{{ $order_detail->order_product->name }}</td>
                                            <td>{{ $order_detail->quantity }}</td>
                                            <td>
                                                @if ($order_detail?->extraOptions != false)
                                                    @foreach ($order_detail?->extraOptions as $extraOption)
                                                        <p>{{ $extraOption?->name }}</p>
                                                    @endforeach
                                                @else
                                                    ---
                                                @endif
                                            </td>
                                            <td class="font-weight-bold">{{ $order_detail->price }}</td>

                                            <td class="font-weight-bold">{{ $order_detail->total }}</td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                </div>
                            </div>
                            <hr>

                            <!-- invoice total -->
                            <div class="invoice-total py-2">
                                <div class="row">
                                    <div class="col-4 col-sm-6 mt-75">
                                        <p>Thanks for your business.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- buttons section -->
                <div class="col-xl-3 col-md-4 col-12 action-btns">
                    <div class="card">
                        <div class="card-body p-2">
                            <a href="#" class="btn btn-primary btn-block mb-1"> <i
                                    class="feather icon-check mr-25 common-size"></i> Confirm Order</a>
                            <a href="#" class="btn btn-info btn-block mb-1 print-invoice"> <i
                                    class="feather icon-printer mr-25 common-size"></i> Print</a>

                            {{--                            <a href="{{ url('/generate-pdf') }}" class="btn btn-danger btn-block mb-1"><i--}}
                            {{--                                    class="feather icon-edit-2 mr-25 common-size"></i> Download Invoice</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
