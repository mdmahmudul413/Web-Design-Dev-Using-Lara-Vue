@extends('website.master')

@section('title')
    Register
@endsection

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Register</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="index.html">Shop</a></li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <form action="{{route('customer.register')}}" class="card login-form" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="title">
                                <h3>Register Now</h3>
                            </div>
                            <div class="form-group input-group">
                                <label for="reg-fn">Full Name</label>
                                <input class="form-control" type="text" id="reg-email" name="name"/>
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                            </div>
                            <div class="form-group input-group">
                                <label for="reg-fn">Email</label>
                                <input class="form-control" type="email" id="reg-email" name="email"/>
                                <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                            </div>
                            <div class="form-group input-group">
                                <label for="reg-fn">Password</label>
                                <input class="form-control" type="password" id="reg-pass" name="password"/>
                                <span class="text-danger">{{$errors->has('password') ? $errors->first('password') : ''}}</span>
                            </div>
                            <div class="form-group input-group">
                                <label for="reg-fn">Contact</label>
                                <input class="form-control" type="number" id="reg-pass" name="mobile"/>
                                <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                            </div>
                            <div class="button">
                                <button class="btn" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
