@extends('website.master')
@section('title' , 'KNS | Profile')
@section('body')
    <!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>profile</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
    <!-- personal deatail section start -->
    <section class="contact-page register-page">
        <div class="container">
            <div class="row">


                <div class="col-sm-12">
                    <h3>PERSONAL DETAIL</h3>

                    <form class="theme-form">

                        <div class="form-row row">

                            <div class="col-md-6">
                                <label for="name"> Name</label>
                                <input type="text" class="form-control" value="{{ $customers->name }}">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" value="{{ $customers->email }}">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Phone number</label>
                                <input type="text" class="form-control" value="{{ $customers->phone }}">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Address</label>
                                <input type="text" class="form-control" value="{{ $customers->address }}">
                            </div>

                        </div>

                    </form>

                </div>

            </div>
        </div>
    </section>
    <!-- Section ends -->
    @endsection