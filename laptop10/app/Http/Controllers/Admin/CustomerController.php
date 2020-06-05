<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Order;
use App\Order_Product;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use DB;
class CustomerController extends Controller
{
    function getInformationCustomer(){
        $customer = Customer::all();
        $order = Order::all();
        $order_product = Order_Product::all();
        return view('admin.customer.customer',compact('customer','order','order_product'));
    }

    function getEditStatus($id){
        $order=Order::find($id);
        return view('admin.customer.edit_status',compact('order'));
    }

    function postEditStatus($id,Request $request){
        $post=$request->all();
        $order=Order::find($id);
        $order->status = $post['status'];
        $order->save();
        return redirect(route('customer'));
    }
}
