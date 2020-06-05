<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $discount_products=Product::all();
        $new_products=Product::all();
        return view('home',compact('discount_products','new_products'));
    }
}
