@extends('dashboard.managerinclude.master')
@section('title' , 'Edit Owner')
@section('body')

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">Edit Owner</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/homepage') }}">Home Page</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/owners') }}">Owners</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Owner </li>
                        </ol>
                    </div>
                </div>
            </div>
{{--            <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">--}}
{{--                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">--}}
{{--                    <div class="btn-group" role="group">--}}
{{--                        <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings icon-left"></i> Settings</button>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div>--}}
{{--                    </div><a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="feather icon-mail"></i></a><a class="btn btn-outline-primary" href="timeline-center.html"><i class="feather icon-pie-chart"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-colored-form-control">Edit Owner</h4>
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
                                    <form class="form" action="{{ route('shop.update', $shop->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')


                                        <div class="form-body">

                                            <div class="row">
                                                <div class="media col-md-12 mb-2">
                                                    <a class="mr-2" href="#">
                                                        <img src="{{ url('public/shops/' . $shop->logo) }}" alt="users avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Shop Logo</h4>
                                                        <div class="col-12 px-0 d-flex">
                                                            <div class="form-group">
                                                                <input  type="file" id="userinput1" class="form-control no-edge-bottom w-50"  name="image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media col-md-12 mb-2">
                                                    <a class="mr-2" href="#">
                                                        <img src="{{ url('public/shops/' . $shop->cover) }}" alt="users avatar" class="" height="64" width="500">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Shop Cover</h4>
                                                        <div class="col-12 px-0 d-flex">
                                                            <div class="form-group">
                                                                <input  type="file" id="userinput1" class="form-control no-edge-bottom w-50"  name="cover">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>Email</h4>
                                                    <div class="form-group">
                                                        <input type="email" id="userinput1" class="form-control border-primary" placeholder="Email" name="email" value="{{$owner->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>Password</h4>
                                                    <div class="form-group">
                                                        <input type="password" id="userinput1" class="form-control border-primary" placeholder="Enter New Password If you Need To Change" name="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i> Shop Name</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1" class="form-control border-primary" placeholder="name" name="name" value='{{$shop->name}}'>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>Owner Name</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1" class="form-control border-primary" placeholder="owner" name="owner" value='{{$shop->owner}}'>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>Shop Address</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1" class="form-control border-primary" placeholder="Location" name="address" value='{{$shop->address}}'>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"></i>Latitude</h4>
                                                    <div class="form-group">
                                                        <input value="{{$shop->latitude}}" type="text" id="userinput1" class="form-control border-primary" placeholder="latitude" name="latitude">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"></i>Longitude</h4>
                                                    <div class="form-group">
                                                        <input value="{{$shop->longitude}}" type="text" id="userinput1" class="form-control border-primary" placeholder="longitude" name="longitude">
                                                    </div>
                                                </div>
                                                <div class=" col-md-6">
                                                    <h4 class="form-section text-dark"></i>Currency</h4>
                                                    <select value="{{ old('currency_id') }}" name="currency_id" id="" class="custom-select border-primary">
                                                        <option>Select Restaurant Currency</option>
                                                        @foreach ($currencies as $currency)
                                                            <option {{$currency->id == $shop->currency_id ? 'selected' : ""}} value="{{ $currency->id }}" >{{ $currency->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>Shop Phone</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1" class="form-control border-primary" placeholder="Phone" name="phone" value='{{$shop->phone}}'>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        Description </h4>
                                                    <div class="form-group">
                                                        <textarea type="text" id="shop" class="form-control border-primary" name="details" rows="5">{{$shop->details}}</textarea>
                                                    </div>
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
