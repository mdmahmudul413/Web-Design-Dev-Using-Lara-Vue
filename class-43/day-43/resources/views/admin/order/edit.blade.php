@extends('admin.master')

@section('title')
    Edit Order Page
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Order Edit Form</h4>
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <form action="{{route('admin.update-order', ['id' => $order->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label class="col-sm-3 col-form-label">Order No</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$order->id}}" readonly/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-sm-3 col-form-label">Order Status</label>
                            <div class="col-sm-9">
                                <select name="order_status" class="form-control">
                                    <option value="pending" {{$order->order_status == 'pending' ? 'selected' : ''}}>Pending</option>
                                    <option value="processing" {{$order->order_status == 'processing' ? 'selected' : ''}}>Processing</option>
                                    <option value="complete" {{$order->order_status == 'complete' ? 'selected' : ''}}>Complete</option>
                                    <option value="cancel" {{$order->order_status == 'cancel' ? 'selected' : ''}}>Cancel</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Delivery Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="delivery_address" rows="5">{{$order->delivery_address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-sm-3 col-form-label">Order Total (Tk)</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" value="{{$order->order_total}}" name="order_total" readonly/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-sm-3 col-form-label">Payment Amount (Tk)</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="payment_amount" value="{{$order->order_total}}"/>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Order</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
