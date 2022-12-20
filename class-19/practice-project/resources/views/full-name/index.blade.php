@extends('master')

@section('title')
    Full Name
@endsection

@section('body')
    <section class="py-5 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Enter First Name & Last Name
                        </div>
                        <div class="card-body">
                            <form action="{{route('get-full-name')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3" for="first_name">First Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" name="first_name" id="first_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3" for="last_name">Last Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" name="last_name" id="last_name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3" for="full_name">Full Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control" value="{{Session::get('result')}}" type="text" id="full_name" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3" for="first_name"></label>
                                    <div class="col-md-9">
                                        <input class="btn btn-outline-success px-5" value="Get Full Name" type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
