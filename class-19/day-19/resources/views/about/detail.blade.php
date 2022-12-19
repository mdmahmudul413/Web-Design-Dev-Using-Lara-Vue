@extends('master')

@section('title')
    Detail
@endsection

@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h1>{{$blog['title']}}</h1>
                        <img height="1000" src="{{asset('/')}}img/{{$blog['image']}}" alt="">
                        <p class="lead">{{$blog['description']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
