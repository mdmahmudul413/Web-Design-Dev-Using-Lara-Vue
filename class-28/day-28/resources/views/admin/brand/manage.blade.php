@extends('admin.master')

@section('title')
    Manage Category Page
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Brand Information</h4>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Brand Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($brands as $brand)
                         <tr>
                             <td>{{$loop->iteration}}</td>
                             <td>{{$brand->name}}</td>
                             <td>{{$brand->description}}</td>
                             <td><img src="{{asset($brand->image)}}" alt="" height="50" width="70"></td>
                             <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                             <td>
                                 <a class="btn btn-success btn-sm" href="{{route('brand.edit', ['id' => $brand->id])}}">
                                     <i class="fa fa-edit"></i>
                                 </a>
                                 <a class="btn btn-danger btn-sm" href="{{route('brand.delete', ['id' => $brand->id])}}" onclick="return confirm('Are you sure to delete this brand?')">
                                     <i class="fa fa-trash"></i>
                                 </a>
                             </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
