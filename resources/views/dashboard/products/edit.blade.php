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
                                                        <input type="text" value="{{ $product->price }}" id="price"
                                                            class="form-control border-primary" placeholder="Price"
                                                            name="price">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        Product Sale</h4>
                                                    <div class="form-group">
                                                        <input type="text" value="{{ $product->sale }}" id="price"
                                                            class="form-control border-primary" placeholder="sale"
                                                            name="sale">
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

                                                @if ($product->mainOptions->count() > 0)

                                                    <div class="col-md-6">
                                                        <h4 class="form-section text-dark"><i
                                                                class="feather icon-edit-2"></i> Current Main Options </h4>
                                                    </div>

                                                    <div class="col-md-6"> </div>

                                                    @foreach ($product->mainOptions as $index => $mainOption)
                                                        <input type="hidden" class="form-control border-primary"
                                                            name="current_main_option_id_{{ $index + 1 }}"
                                                            value="{{ $mainOption->id }}">

                                                        <div class="col-md-6">
                                                            <h4 class="form-section text-dark"><i
                                                                    class="feather icon-edit-2"></i> Current Main Option
                                                                Name </h4>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control border-primary"
                                                                    placeholder="name"
                                                                    name="current_main_option_name_{{ $index + 1 }}"
                                                                    value="{{ $mainOption->name }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <h4 class="form-section text-dark"><i
                                                                    class="feather icon-edit-2"></i> Current Main Option
                                                                Price </h4>
                                                            <div class="form-group">
                                                                <input type="number" min="0"
                                                                    class="form-control border-primary"
                                                                    placeholder="Price"
                                                                    name="current_main_option_price_{{ $index + 1 }}"
                                                                    value="{{ $mainOption->price }}">
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                @endif

                                                @if ($product->extraOptions->count() > 0)

                                                    <div class="col-md-6">
                                                        <h4 class="form-section text-dark"><i
                                                                class="feather icon-edit-2"></i> Current Extra Options
                                                        </h4>
                                                    </div>

                                                    <div class="col-md-6"> </div>

                                                    @foreach ($product->extraOptions as $index => $extraOption)
                                                        <input type="hidden" class="form-control border-primary"
                                                            name="current_extra_option_id_{{ $index + 1 }}"
                                                            value="{{ $extraOption->id }}">

                                                        <div class="col-md-6">
                                                            <h4 class="form-section text-dark"><i
                                                                    class="feather icon-edit-2"></i> Current Extra Option
                                                                Name </h4>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control border-primary"
                                                                    placeholder="name"
                                                                    name="current_extra_option_name_{{ $index + 1 }}"
                                                                    value="{{ $extraOption->name }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <h4 class="form-section text-dark"><i
                                                                    class="feather icon-edit-2"></i> Current Extra Option
                                                                Price </h4>
                                                            <div class="form-group">
                                                                <input type="number" min="0"
                                                                    class="form-control border-primary"
                                                                    placeholder="Price"
                                                                    name="current_extra_option_price_{{ $index + 1 }}"
                                                                    value="{{ $extraOption->price }}">
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                @endif

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        New Main Options </h4>
                                                    <div class="form-group">
                                                        <button
                                                            class="form-control border-primary btn btn-primary text-white"
                                                            type="button" onclick="addMainOption()"> Add New Main Option
                                                        </button>
                                                        <input type="hidden" class="form-control border-primary"
                                                            id="main_options_length" name="main_options_length"
                                                            value="0">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                </div>

                                                <div class="row col-md-12" id="main-options">
                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        New Extra Options </h4>
                                                    <div class="form-group">
                                                        <button
                                                            class="form-control border-primary btn btn-primary text-white"
                                                            type="button" onclick="addExtraOption()"> Add New Extra
                                                            Option </button>
                                                        <input type="hidden" class="form-control border-primary"
                                                            id="extra_options_length" name="extra_options_length"
                                                            value="0">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                </div>

                                                <div class="row col-md-12" id="extra-options">
                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        Is Available ? </h4>
                                                    <div class="form-group">
                                                        <input type="checkbox" class="form-control border-primary"
                                                            id="product_is_available" name="is_available"
                                                            {{ $product->is_available ? 'checked' : '' }}>
                                                    </div>
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

                                                <div class="col-md-12">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        Product Detalis</h4>
                                                    <div class="form-group">
                                                        <textarea type="text" id="productdetails" class="form-control border-primary" name="details" rows="5">{{ $product->details }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class=" col-md-12">
                                                    <h4 class="form-section text-dark"><i class="fa fa-photo"></i> Product
                                                        Images </h4>

                                                    <label id="projectinput7" class="file center-block ">


                                                        <input type="file" id="file" name="images[]"
                                                            class="pb-1" multiple>


                                                        @foreach ($product->images as $image)
                                                            <img src="{{ url('products/' . $image->name) }}"
                                                                width="50" height="50" alt="">
                                                            <input class="form-check-input" name="delete_images[]"
                                                                type="checkbox" value="{{ $image->id }}">
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
        let mainOptions = $('#main-options');
        let extraOptions = $('#extra-options');

        let mainOptionsLength = $('#main_options_length');
        let extraOptionsLength = $('#extra_options_length');

        let mainOptionIndex = 1;
        let extraOptionIndex = 1;

        let optionDiv = (optionIndex, type) => (
            `
            <div class="col-md-6">
                <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i> ${type} Option Name </h4>
                <div class="form-group">
                    <input type="text" class="form-control border-primary" placeholder="name" name="${ type.toLowerCase() }_option_name_${optionIndex}">
                </div>
            </div>

            <div class="col-md-6">
                <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i> ${type} Option Price</h4>
                <div class="form-group">
                    <input type="number" min="0"  class="form-control border-primary" placeholder="Price" name="${ type.toLowerCase() }_option_price_${optionIndex}">
                </div>
            </div>
        `)

        function addMainOption() {
            mainOptionsLength.val(mainOptionIndex)
            mainOptions.append(optionDiv(mainOptionIndex++, 'Main'));
        }

        function addExtraOption() {
            extraOptionsLength.val(extraOptionIndex)
            extraOptions.append(optionDiv(extraOptionIndex++, 'Extra'));
        }
    </script>
@endsection
