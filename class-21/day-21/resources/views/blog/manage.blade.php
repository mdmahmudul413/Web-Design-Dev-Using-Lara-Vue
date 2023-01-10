@extends('master')

@section('title')
    Manage Blog Page
@endsection

@section('body')
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">All Blog Info</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Blog Title</th>
                                        <th>Blog Author</th>
                                        <th>Blog Description</th>
                                        <th>Blog Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog['title']}}</td>
                                        <td>{{$blog['author']}}</td>
                                        <td>{{$blog['description']}}</td>
                                        <td>
                                            <img src="{{asset($blog->image)}}" alt="" height="50" width="60"/>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
