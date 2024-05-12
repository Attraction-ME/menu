
@extends('website.master')
@section('title' , 'Kns | Register')
@section('body')


    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3>create account</h3>
                    <div class="theme-card">

                        <form class="theme-form"  action="{{route('customer.register.submit')}}" method="post" >
                            @csrf
                            <div class="form-group">
                                <label for="email">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror " id="fname" name="name" placeholder=" Name" required="">
                                @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="text"  name="email" class="form-control @error('email') is-invalid @enderror" id="email"   placeholder="Email" required="">

                                  @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>
                            <div class="form-group">
                                <label for="review">Password</label>
                                <input type="password" name="password" class="form-control" id="review"
                                       placeholder="Enter your password" required="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror

                            </div>


                                    <button type="submit"  class="btn btn-solid " >
                                        {{ __('Register') }}
                                    </button>

                        </form>
{{--                        <form class="theme-form" action="{{ route('registeruser') }}" method="post">--}}
{{--                            @csrf--}}
{{--                            <div class="form-row row">--}}
{{--                             --}}
{{--                                <div class="col-md-6">--}}
{{--                                    <label for="review">Last Name</label>--}}
{{--                                    <input type="password" class="form-control" id="lname" placeholder="Last Name"--}}
{{--                                           required="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-row row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <label for="email">Name</label>--}}
{{--                                    <input type="text" class="form-control @error('name') is-invalid @enderror " id="fname" name="name" placeholder=" Name"--}}
{{--                                           required="">--}}

{{--                                    @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <label for="email">email</label>--}}
{{--                                    <input type="text"  name="email" class="form-control @error('email') is-invalid @enderror" id="email"   placeholder="Email" required="">--}}

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <label for="review">Password</label>--}}
{{--                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="review"--}}
{{--                                           placeholder="Enter your password"  name="password" required="">--}}

{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="row mb-0">--}}
{{--                                    <div class="col-md-6 offset-md-4">--}}
{{--                                        <button type="submit"class="btn btn-solid">--}}
{{--                                            {{ __('Register') }}--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->










@endsection
