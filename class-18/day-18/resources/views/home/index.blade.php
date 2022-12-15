@extends('master')

@section('title')
    Home
@endsection

@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                @foreach($products as $item)
                    <div class="col-md-3 my-2">
                        <div class="card">
                            <img src="{{asset('/')}}img/{{$item['image']}}" height="200" alt="">
                            <div class="card-body">
                                <h4>{{$item['name']}}</h4>
                                <p>{{$item['description']}}</p>
                                <hr>
                                <button class="btn btn-outline-success px-5">Read More</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
