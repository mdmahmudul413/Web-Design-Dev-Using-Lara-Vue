@extends('master')

@section('title')
    Home
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset('/')}}img/1.jpg" height="350" alt="">
                        <div class="card-body">
                            <h4>Content One</h4>
                            <p>This is content one description</p>
                            <hr>
                            <a href="" class="btn btn-outline-success px-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
