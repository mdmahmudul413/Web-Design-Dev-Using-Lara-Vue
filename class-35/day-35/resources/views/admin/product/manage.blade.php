@extends('admin.master')

@section('title')
    Manage Product Page
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Product Information</h4>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Product Name</th>
                            <th>product Code</th>
                            <th>Regular Price</th>
                            <th>Selling Price</th>
                            <th>Stock Amount</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->regular_price}}</td>
                            <td>{{$product->selling_price}}</td>
                            <td>{{$product->stock_amount}}</td>
                            <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <img src="{{asset($product->image)}}" alt="" width="70" height="50"/>
                            </td>
                            <td>
                                <a href="{{route('product.detail', ['id' => $product->id])}}" class="btn btn-info btn-sm" title="Detail">
                                    <i class="fa fa-book-open"></i>
                                </a>
                                <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-sm" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger btn-sm" title="Delete">
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
