@extends('layouts.app')
@section('title' , 'Dashboard | Login Page')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1"><img src="{{url('public/dashboard\app-assets\images\logo5.png')}}" class="w-60 img-thumbnail"  alt="branding logo"></div>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Sign In</span></h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body ">
                                    <form class="form-horizontal form-simple" method="POST" action="{{ route('login') }}" novalidate>
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input name="email" value="{{ old('email') }}" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="user-name" placeholder="E-mail" required>
                                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                            <div class="form-control-position">
                                                <i class="feather icon-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" id="user-password" placeholder="Password" required>
                                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                            <div class="form-control-position">
                                                <i class="fa fa-key"></i>
                                            </div>
                                        </fieldset>

                                        <div class="text-center">
                                            <button type="submit" class="btn  btn-lg btn-block text-white mt-2 " style="background-color: #ed3557"> <i class="feather icon-unlock"> </i>Login</button>
                                        </div>
                                        <br>
                                        <h5 class="text-center">Admin Dashboard</h5>
                                        <h5 class="text-center">call us if you need any help </h5>
                                        <h5 class="text-center"><a target="_blank" href="http://attractionme.net">Attractionme</a></h5>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->




@endsection
