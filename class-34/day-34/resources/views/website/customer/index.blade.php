@extends('website.master')

@section('title')
    {{session('customer_name')}}
@endsection

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">My Dashboard</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="index.html">Shop</a></li>
                        <li>Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="card card-body">
                        <ul class="list-group">
                            <li><a class="list-group-item active" href="{{route('customer.dashboard')}}">My Dashboard</a></li>
                            <li><a class="list-group-item" href="{{route('customer.order')}}">My Order</a></li>
                            <li><a class="list-group-item" href="">My Wishlist</a></li>
                            <li><a class="list-group-item" href="">My Account</a></li>
                            <li><a class="list-group-item" href="">My Profile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card card-body">
                        <h1 class="text-center py-5">My Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
