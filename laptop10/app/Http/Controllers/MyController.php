<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Socialite;

class MyController extends Controller
{
    //

    public function login(){
        return view('auth.login');
    }

    public function checklogin(Request $request){
        $username = $request->username;
        $password = $request->password;

        $user = User::all();
        foreach ($user as $user){
            if ($user->username == $username && $user->password == $password && $user->type == "user"){
                Session::put('username',$user->username);
                return redirect(route('home'));
            }
            if ($user->username == $username && $user->password == $password && $user->type == "admin"){
                //return view('product.homeadmin');
                Session::put('username',$user->username);
                return redirect(route("homeadmin"));
            }
        }


        return view('auth.login',['message'=>"Tài Khoản Hoặc Mật Khẩu Sai"]);

    }

    public function register(){
        return view('auth.register');
    }

    public function checkregister(Request $request){
        $username = $request['name'];
        $password = $request['password'];
        $email = $request['email'];
        $type = "user";

        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $user->email = $email;
        $user->type = $type;
        $user->save();


        Session::put('username',$user->username);
        return redirect(route('home'));

    }

    public function changepassword(){
        return view('auth.passwords.email');
    }

    public function checkchangepassword(Request $request){

        $user = User::all();
        foreach ($user as $user){
            if($user->email == $request['email']){
                $user->password = $request['newpassword'];
                $user->save();
                Session::put('username',$user->username);
                return redirect(route('home'));
            }
        }


    }

    public function redirect(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(){
        $user = Socialite::driver('facebook')->user();
        /*$user_new = new User();
        $user_new->username = $user->name;
        $user_new->email = $user->email;
        $user_new->type = 'user';
        $user_new->avatar = $user->avatar;
        $user_new->save();

        Session::put('username',$user->name);
        Session::put('avatar',$user->avatar);
        return redirect(route('home'));*/

        $nguoidung = User::all();
        foreach ($nguoidung as $nguoidung){
            if($nguoidung->username == $user->name){
                Session::put('username',$user->name);
                Session::put('avatar',$user->avatar);
                return redirect(route('home'));
            }
        }

        $user_new = new User();
        $user_new->username = $user->name;
        $user_new->email = $user->email;
        $user_new->type = 'user';
        $user_new->avatar = $user->avatar;
        $user_new->save();

        Session::put('username',$user->name);
        Session::put('avatar',$user->avatar);
        return redirect(route('home'));

    }





    public function timkiem( Request $request){
        $tukhoa=$request->tukhoa;

        //$products = DB::table('products')->where('product_name',$tukhoa)->get();

        //$product=Product::find($tukhoa);

        $products = Product::all();
        foreach ($products as $item){
            if($item->product_name == $tukhoa){
                $product = $item;
                $id = $item->id;
            }
        }

        $getreviews = DB::table('review_product')->where('product_id',$id)->get();

        return view('product_detail',compact('product','getreviews'));


    }

    public function goiytimkiem(Request $request)
    {
        //$data = TinTuc::select("title as name")->where("title","LIKE","%{$request->input('query')}%")->get();
          $data = Product::select("product_name as name")->where("product_name","LIKE","%{$request->input('query')}%")->get();
          return response()->json($data);
    }



}
