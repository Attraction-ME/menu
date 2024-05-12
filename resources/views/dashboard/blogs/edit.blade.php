@extends('dashboard.master')
@section('title' , 'Edit Blog')
@section('body')

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">Edit Blog</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/homepage') }}">Home Page</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/blogs') }}">Blogs</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Blog</li>
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
                                <h4 class="card-title" id="basic-layout-colored-form-control">Edit Blog</h4>
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
                                    <form class="form" action="{{ route('blogs.update', $blog->id) }}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('put')


                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i> Blog Title</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1" value="{{$blog->title}}"
                                                               class="form-control border-primary" placeholder="title"
                                                               name="title">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>
                                                        Content </h4>
                                                    <div class="form-group">
                                                        <textarea type="text" id="blog"
                                                                  class="form-control border-primary" name="details"
                                                                  rows="5">{{$blog->details}}</textarea>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <h4 class="form-section text-dark"><i class="fa fa-photo"></i> Blog
                                                        Image </h4>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" value="{{$blog->image}}"
                                                               name="image">
                                                        <img src="{{ url('blogs/' . $blog->image) }}" width="50"
                                                             height="50" alt="">
                                                        <span class="file-custom"></span>
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
