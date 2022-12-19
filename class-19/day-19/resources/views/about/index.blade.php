@extends('master')

@section('title')
    About
@endsection

@section('body')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img src="{{asset('/')}}img/{{$blog['image']}}" height="350" alt="">
                            <div class="card-body">
                                <h3>{{$blog['title']}}</h3>
                                <p class="lead">{{substr($blog['description'], 0, 100)}} ....</p>
                                <hr/>
                                <a href="{{route('detail', ['id' => $blog['id']])}}" class="btn btn-outline-danger px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
