<?php

namespace App\Http\Controllers;

use App\Mail\ShoppingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Customer;
use App\Order;
use App\Order_Product;
//use \Cart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Mail;

class CartController extends Controller
{
    //
    public function index(){
       /* $cart = Cart::content();
        return view('cart',compact('cart'));*/
       return view('cart');
    }

    public function postAddTocart($id,Request $request){
        $product = Product::find($id);
        $post = $request->all ();
        $price = $product->price;
        $sale_price = $product->sale_price;
        $image = $product->product_image_intro;

        Cart::add($id, $product ->product_name, $post['quality'],$price, ['product_sale_price' => $sale_price,'image' => $image]);
        /*$cart = Cart::content();
        return view('cart',compact('cart'));*/
        return redirect(route('gio-hang'));
    }

    public function removeItemCart($id,Request $request){
        Cart::remove($id);
        return redirect(route('gio-hang'));
    }

    public function payNow(){
        return view ("checkout");
    }

    public function postPayNow(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gioi_tinh' => 'required',
            'phone_number' => 'required',
            //TODO lat nua phai lam upload product
            //'product_image_intro' => 'required',
            'address' => 'required'
        ]);

        $post=$request->all();

        $customers = new Customer();
        $customers->first_name = $post['first_name'];
        $customers->last_name = $post['last_name'];
        $customers->gender = $post['gioi_tinh'];
        $customers->email = $post['email'];
        $customers->address = $post['address'];
        $customers->phone = $post['phone_number'];
        $customers->save ();

        $order = new Order();
        $order->customer_id = $customers->id;
        $order->total=Cart::total();
        $order->status="pending";
        $order->save ();

        foreach (Cart::content() as $item){
            DB::table('order_product')->insert(
                array(
                    'order_id' => $order->id,
                    'product_id' => $item->id,
                    'product_name' => $item->name,
                    'product_price' => $item->price,
                    'product_qty' => $item->qty,
                    'product_sale_price' => $item->options->product_sale_price,

                )
            );
        }


        Session::put('price',Cart::total());
        Mail::to($request->email)->send(new ShoppingMail());


        Cart::destroy();
        return redirect(route('home'));
    }

}
