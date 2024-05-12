@extends('dashboard.master')
@section('title', 'Edit Product')
@section('body')

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">Edit Product</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/homepage') }}">Home Page</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/products') }}">Products</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Product </li>
                        </ol>
                    </div>
                </div>
            </div>
            {{--            <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2"> --}}
            {{--                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown"> --}}
            {{--                    <div class="btn-group" role="group"> --}}
            {{--                        <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings icon-left"></i> Settings</button> --}}
            {{--                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div> --}}
            {{--                    </div><a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="feather icon-mail"></i></a><a class="btn btn-outline-primary" href="timeline-center.html"><i class="feather icon-pie-chart"></i></a> --}}
            {{--                </div> --}}
            {{--            </div> --}}
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-colored-form-control">Edit Product</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form class="form" action="{{ route('products.update', $product->id) }}"
                                        method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')


                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        Product Name</h4>
                                                    <div class="form-group">
                                                        <input type="text" value="{{ $product->name }}" id="userinput1"
                                                            class="form-control border-primary" placeholder="name"
                                                            name="name">
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        Product Price</h4>
                                                    <div class="form-group">
                                                        <input type="text"  value="{{ $product->price }}" id="price"
                                                            class="form-control border-primary" placeholder="Price"
                                                            name="price" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        Product Sale</h4>
                                                    <div class="form-group">
                                                        <input type="text"  value="{{ $product->sale }}" id="price"
                                                               class="form-control border-primary" placeholder="sale"
                                                               name="sale" >
                                                    </div>
                                                </div>
                                                <div class=" col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-1"></i>
                                                        Product Category </h4>
                                                    <select name="category_id" id=""
                                                            class="custom-select border-primary">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                                {{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class=" col-md-12">
                                                    <h4 class="form-section text-dark"><i class="fa fa-photo"></i>
                                                        Thumbnail Image </h4>
                                                    <label id="projectinput7" class="file center-block">
                                                        <img src="{{ url('products/' . $product->image_temp) }}"
                                                             width="100" height="100" alt="">
                                                        <input type="file" id="file" name="image_temp"
                                                               value="{{ $product->image_temp }}">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>



{{--                                                <div class="col-md-4">--}}
{{--                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>--}}
{{--                                                        Product Sale</h4>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <input type="text" value="{{ $product->sale }}" id="userinput1"--}}
{{--                                                            class="form-control border-primary" placeholder="Sale"--}}
{{--                                                            name="sale">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-4">--}}
{{--                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>--}}
{{--                                                        Product Quantity</h4>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <input type="text" value="{{ $product->quantity }}"--}}
{{--                                                            id="userinput1" class="form-control border-primary"--}}
{{--                                                            placeholder="Quantity" name="quantity">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}



                                                <div class="col-md-12">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        Product Detalis</h4>
                                                    <div class="form-group">
                                                        <textarea type="text" id="productdetails" class="form-control border-primary" name="details" rows="5">{{ $product->details }}</textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">

{{--                                                <div class="form-group col-md-6">--}}
{{--                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-1"></i>--}}
{{--                                                        Product Collection </h4>--}}
{{--                                                    <select name="collection_id" id=""--}}
{{--                                                        class="custom-select border-primary">--}}
{{--                                                        @foreach ($collections as $collection)--}}
{{--                                                            <option value="{{ $collection->id }}"--}}
{{--                                                                {{ $collection->id == $product->collection_id ? 'selected' : '' }}>--}}
{{--                                                                {{ $collection->name }}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group col-md-6">--}}
{{--                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-1"></i>--}}
{{--                                                        Product Label </h4>--}}
{{--                                                    <select name="label_id" id=""--}}
{{--                                                        class="custom-select border-primary">--}}
{{--                                                        @foreach ($labels as $label)--}}
{{--                                                            <option value="{{ $label->id }}"--}}
{{--                                                                {{ $label->id == $product->label_id ? 'selected' : '' }}>--}}
{{--                                                                {{ $label->name }}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group col-md-6">--}}
{{--                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-1"></i>--}}
{{--                                                        Product Stock_Status </h4>--}}
{{--                                                    <select name="stock_id" id=""--}}
{{--                                                        class="custom-select border-primary">--}}
{{--                                                        @foreach ($stocks as $stock)--}}
{{--                                                            <option value="{{ $stock->id }}"--}}
{{--                                                                {{ $stock->id == $product->stock_id ? 'selected' : '' }}>--}}
{{--                                                                {{ $stock->name }}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group col-md-6">--}}
{{--                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-1"></i>--}}
{{--                                                        Product Tag</h4>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <input type="text" id="userinput1"--}}
{{--                                                            class="form-control border-primary" placeholder="Tag"--}}
{{--                                                            name="tag_id" value="{{ $product->tag->name }}">--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
                                            </div>
{{--                                            <div class="row">--}}
{{--                                                <div class="form-group col-md-12">--}}
{{--                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-1"></i>--}}
{{--                                                        Product Attribute</h4>--}}
{{--                                                    @foreach ($attributes as $attribute)--}}
{{--                                                        <div class="form-group">--}}


{{--                                                            <label--}}
{{--                                                                class="text-dark font-weight-bold">{{ $attribute->name }}--}}
{{--                                                                :</label>--}}
{{--                                                            @foreach ($subattributes as $subattribute)--}}
{{--                                                                @if ($subattribute->attribute_id == $attribute->id)--}}
{{--                                                                    <div class="form-check form-check-inline">--}}
{{--                                                                        <input class="form-check-input " type="checkbox"--}}
{{--                                                                            value="{{ $subattribute->id }}"--}}
{{--                                                                            @foreach ($setattrs as $setattr) {{ $subattribute->id == $setattr->sub_attribute_id ? 'checked' : '' }} @endforeach--}}
{{--                                                                            name="sub_attribute_id[]" id="defaultCheck1">--}}
{{--                                                                        <label class="form-check-label"--}}
{{--                                                                            for="defaultCheck1">--}}
{{--                                                                            {{ $subattribute->name }}--}}
{{--                                                                        </label>--}}
{{--                                                                    </div>--}}
{{--                                                                @endif--}}
{{--                                                            @endforeach--}}



{{--                                                        </div>--}}
{{--                                                    @endforeach--}}

{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <div class="row">
                                                <div class=" col-md-12">
                                                    <h4 class="form-section text-dark"><i class="fa fa-photo"></i> Product Images  </h4>

                                                    <label id="projectinput7" class="file center-block ">


                                                            <input type="file" id="file"  name="images[]"  class="pb-1" multiple>


                                                            @foreach($product->images as $image)
                                                                <img src="{{  url('products/' .$image->name) }}" width="50" height="50" alt="">
                                                                <input  class="form-check-input" name="delete_images[]"  type="checkbox" value="{{$image->id}}">
                                                            @endforeach
                                                        <span> Select Image To Delete It</span>



                                                    </label>


                                                </div>
                                            </div>

                                        </div>


                                        <div class="form-actions right">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>
                                            <button type="reset" class="btn btn-warning mr-1">
                                                <i class="feather icon-x"></i> Cancel
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            // Trigger the calculation when the pricedollar input changes
            $('#dollar').on('input', function () {
                // Get the value of pricedollar input
                var pricedollar = $(this).val();

                // Check if pricedollar is a valid number
                if (!isNaN(pricedollar)) {
                    // Get the dollar exchange rate from the server (you may need to modify the URL)
                    $.get('/get-dollar-rate', function (data) {
                        // Calculate the product price based on pricedollar and the dollar exchange rate
                        var dollarRate = data.rate; // Replace 'rate' with the actual field name in your Dollar model
                        var productPrice = pricedollar * dollarRate;

                        // Update the value of the price input
                        $('#price').val(productPrice.toFixed(2)); // Adjust the decimal places as needed
                    });
                } else {
                    // If pricedollar is not a valid number, clear the value of the price input
                    $('#price').val('');
                }
            });
        });
    </script>
@endsection
