@extends('master')

@section('title')
    Calculator
@endsection

@section('body')
    <section class="py-5 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Calculator
                        </div>
                        <div class="card-body">
                            <form action="{{route('calculate')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3" for="first_number">First Number</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="number" name="first_number" id="first_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3" for="second_number">Second Number</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="number" name="second_number" id="second_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Choice</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="choice" value="+" checked> + </label>
                                        <label class="mx-2"><input type="radio" name="choice" value="-"> - </label>
                                        <label class="mx-2"><input type="radio" name="choice" value="x"> x </label>
                                        <label class="mx-2"><input type="radio" name="choice" value="/"> / </label>
                                        <label class="mx-2"><input type="radio" name="choice" value="%"> % </label>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3" for="result">Result</label>
                                    <div class="col-md-9">
                                        <input class="form-control" value="{{Session::get('calculation')}}" type="text" id="result" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3" for="first_name"></label>
                                    <div class="col-md-9">
                                        <input class="btn btn-outline-success px-5" value="Calculate" type="submit">
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
