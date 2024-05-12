@extends('website.master')
@section('title' , 'Kns | Login')
@section('body')


    <!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            @if(session('error'))
                <div class="alert alert-success">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <h3>Login</h3>
                    <div class="theme-card">
                        <form class="theme-form" action="{{route('customer.login.submit')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email"
                                       required="">
                            </div>
                            <div class="form-group">
                                <label for="review">Password</label>
                                <input type="password" name="password" class="form-control" id="review"
                                       placeholder="Enter your password" required="">

                                <button type="submit" class="btn btn-solid">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>New Customer</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Create A Account</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                            able to order from our shop. To start shopping click register.</p><a
                                href=" {{url('/register_customer')}}"
                                class="btn btn-solid">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->







@endsection
