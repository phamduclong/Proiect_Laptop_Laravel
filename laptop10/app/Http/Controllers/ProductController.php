<?php

namespace App\Http\Controllers;

use App\Product;
use App\Review_product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    public function getDetailProduct($id,Request $request){
        $product=Product::find($id);

        $getreviews = DB::table('review_product')->where('product_id',$id)->get();

        return view('product_detail',compact('product','getreviews'));
    }

    public function getListDetailProduct($name){
        $products = DB::table('products')->where('category_name',$name)->get();
        $number = DB::table('products')->where('category_name',$name)->count();
        return view('list_detail_product',compact('products','name','number'));
    }

    public function postComment($id,Request $request){

        $product=Product::find($id);
        $review = new Review_product();
        $review->product_id = $id;
        $review->comment_product = $request->comment;

        if(Session::has('username')){
            $review->accout = Session::get('username');
        }
        else{
            $review->accout = 'Ẩn danh';
        }

        if(Session::has('avatar')){
            $review->avatar = Session::get('avatar');
            $review->facebook = 'yes';
        }
        else{
            $review->avatar = 'upload/accout.jpg';
            $review->facebook = 'no';
        }


        $review->save();

        $getreviews = DB::table('review_product')->where('product_id',$id)->get();
        return view('product_detail',compact('product','getreviews'));
    }
}
