@extends('master')

@section('title')
    Contact
@endsection

@section('body')
    <section class="py-5 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Laravel Input Output
                        </div>
                        <div class="card-body">
                            <form action="{{route('full-name')}}" method="POST">
                                @csrf
                                <div class="row mb-2">
                                    <label class="col-md-2" for="">First Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="first_name">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label class="col-md-2" for="">Last Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="last_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2" for="">Full Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control" value="{{Session::get('fullName')}}" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-2" for=""></label>
                                    <div class="col-md-10">
                                        <button class="btn btn-outline-danger px-5" type="submit">Submit</button>
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
