<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
use Session;

class CheckoutController extends Controller
{
    public $customer, $order, $orderDetail, $product;
    public function index()
    {
        return view('website.checkout.index');
    }

    public function newOrder(Request $request)
    {
        if(Session::get('customer_id')){
            $this->validate($request, [
                'delivery_address'  => 'required',
            ]);
            $this->customer = Customer::find(Session::get('customer_id'));
        }
        else{
            $this->validate($request, [
                'name'              => 'required',
                'email'             => 'required|unique:customers,email',
                'mobile'            => 'required|unique:customers,mobile',
                'delivery_address'  => 'required',
            ], [
                'name.required'     => 'এই ফিল্ডটি অবশ্যই ফিলাপ করতে হবে',
                'email.required'    => 'এই ফিল্ডটি অবশ্যই ফিলাপ করতে হবে',
                'email.unique'      => 'এই ইমেইলটি আগেই নেয়া হয়েছে',
            ]);

            $this->customer             = new Customer();
            $this->customer->name       = $request->name;
            $this->customer->email      = $request->email;
            $this->customer->password   = bcrypt($request->mobile);
            $this->customer->mobile     = $request->mobile;
            $this->customer->save();

            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }

        $this->order = new Order();
        $this->order->customer_id       = $this->customer->id;
        $this->order->order_total       = Session::get('order_total');
        $this->order->tax_total         = Session::get('tax_total');
        $this->order->shipping_total    = Session::get('shipping_total');
        $this->order->order_date        = date('y-m-d');
        $this->order->order_timestamp   = strtotime(date('y-m-d'));
        $this->order->delivery_address  = $request->delivery_address;
        $this->order->payment_method    = $request->payment_method;
        $this->order->save();

        foreach (Cart::getContent() as $cartItem)
        {
            $this->orderDetail = new OrderDetail();
            $this->orderDetail->order_id = $this->order->id;
            $this->orderDetail->product_id = $cartItem->id;
            $this->orderDetail->product_name = $cartItem->name;
            $this->orderDetail->product_price = $cartItem->price;
            $this->orderDetail->product_quantity = $cartItem->quantity;
            $this->orderDetail->save();

            $this->product = Product::find($cartItem->id);
            $this->product->stock_amount = $this->product->stock_amount - $cartItem->quantity;
            $this->product->save();

            Cart::remove($cartItem->id);
        }
     return redirect('/complete-order')->with('message', 'Congratulations, Your order has been successfully posted. We will contact you vary soon.');
    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }
}
