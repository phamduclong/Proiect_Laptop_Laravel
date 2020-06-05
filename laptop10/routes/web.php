<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Product;

Auth::routes();

Route::get('/', function (){
    //return view('welcome');
   // Session::forget('username');
    return redirect(route('home'));

});
//trang người dùng của hiệp
/*Route::get('/home', 'HomeController@index')->name('home');

Route::get("product-detail/{id}",['as'=>'product-detail','uses'=>"ProductController@getDetailProduct"]);

Route::post("add-to-cart/{id}",['as'=>'add-to-cart','uses'=>"CartController@postAddTocart"]);

Route::get("gio-hang",['as'=>'gio-hang','uses'=>"CartController@index"]);

Route::get("danh-muc/{id}",['as'=>'danh-muc','uses'=>"ProductController@getProductsById"]);

Route::get("thanh-toan",['as'=>'thanh-toan','uses'=>"CartController@payNow"]);

Route::post("thanh-toan",['as'=>'thanh-toan','uses'=>"CartController@postPayNow"]);

Route::post("remove-item-cart/{id}",['as'=>'remove-item-cart','uses'=>"CartController@removeItemCart"]);*/

//TODO trang người dùng của long
Route::get('/home', 'HomeController@index')->name('home');
Route::get("product-detail/{id}",['as'=>'product-detail','uses'=>"ProductController@getDetailProduct"]);
Route::post("add-to-cart/{id}",['as'=>'add-to-cart','uses'=>"CartController@postAddTocart"]);//làm sau bây giờ tạo route giohang xem ra cái j đã
Route::get("gio-hang",['as'=>'gio-hang','uses'=>"CartController@index"]);
Route::post("remove-item-cart/{id}",['as'=>'remove-item-cart','uses'=>"CartController@removeItemCart"]);
Route::get("thanh-toan",['as'=>'thanh-toan','uses'=>"CartController@payNow"]);
Route::post("thanh-toan",['as'=>'thanh-toan','uses'=>"CartController@postPayNow"]);
//TODO sua dang
//Route::post("dang-nhap",['as'=>'dang-nhap','uses'=>"CartController@removeItemCart"]);

Route::get('dangnhap','MyController@login')->name('dangnhap');

Route::post('xulydangnhap','MyController@checklogin')->name('login');

Route::get('dangky','MyController@register')->name('register');

Route::post('xulydangky','MyController@checkregister')->name('checkregister');

Route::get('doimatkhau','MyController@changepassword')->name('changepassword');

Route::post('xulydoimatkhau','MyController@checkchangepassword')->name('checkchangepassword');

Route::get('facebook/redirect','MyController@redirect');
Route::get('facebook/callback', 'MyController@callback');

//TODO tim-kiem
Route::post("tim-kiem",['as'=>'tim-kiem','uses'=>"CartController@removeItemCart"]);

Route::post("gioi-thieu",['as'=>'gioi-thieu','uses'=>"CartController@removeItemCart"]);

Route::post("lien-he",['as'=>'lien-he','uses'=>"CartController@removeItemCart"]);


//TODO Xây dựng trang admin
Route::group(['prefix'=>'admin','namespace'=>"Admin"],function(){
    Route::group(['prefix' => 'san-pham'], function () {

        Route::get ("home-admin",['as'=>'homeadmin','uses'=>"HomeController@getHomeAdmin"]);


        //root/admin/san-pham/danh-sach
        Route::get("danh-sach",['as'=>'danh-sach-san-pham','uses'=>"ProductController@getListProduct"]);

        //root/admin/san-pham/them
        Route::get("them", ['as' => 'them-san-pham', 'uses' => 'ProductController@getAddProduct']);

        //root/admin/san-pham/them
        Route::post("them", ['as' => 'post-add-product', 'uses' => 'ProductController@postAddProduct']);

        //root/admin/san-pham/sua-san-pham/3
        Route::get("sua-san-pham/{id}", ['as' => 'sua-san-pham', 'uses' => 'ProductController@getEditProduct']);

        //root/admin/san-pham/sua-san-pham/3
        Route::post("sua-san-pham/{id}", ['as' => 'post-sua-san-pham', 'uses' => 'ProductController@postEditProduct']);

        //root/admin/san-pham/xoa-san-pham
        Route::get("xoa-san-pham/{id}", ['as' => 'xoa-san-pham', 'uses' => 'ProductController@DeleteProduct']);

        //root/admin/san-pham/list-image/{id}
        Route::get("list-image/{id}", ['as' => 'list-image', 'uses' => 'ProductController@getEditListImageProduct']);

        //root/admin/san-pham/add-image-product/{product_id}
        Route::get("add-image-product/{product_id}", ['as' => 'add-image-product', 'uses' => 'ProductController@getAddImageProduct']);

        //root/admin/san-pham/add-image-product/{product_id}
        Route::get("post-add-image-product/{product_id}", ['as' => 'post-add-image-product', 'uses' => 'ProductController@postAddImageProduct']);
    });

    Route::group(['prefix' => 'don-hang'], function () {
        //root/admin/don-hang/list-don-hang
        Route::get("list-don-hang", ['as' => 'list-don-hang', 'uses' => 'OrderController@getAllOrder']);

        //root/admin/don-hang/list-don-hang
        Route::get("chi-tiet-don-hang/{id}", ['as' => 'chi-tiet-don-hang', 'uses' => 'OrderController@getOrderDetail']);

        //root/admin/don-hang/list-don-hang
        Route::post("update-order/{id}", ['as' => 'post-edit-order', 'uses' => 'OrderController@updateOrder']);

    });

    //root/admin/danh-muc
    /*Route::group(['prefix' => 'danh-muc'], function () {

        //root/admin/danh-muc/list-danh-muc
        Route::get("list-danh-muc",['as'=>'list-danh-muc','uses'=>"CategoryController@listCategory"]);

        //root/admin/danh-muc/them-danh-muc
        Route::get("them", ['as' => 'them-danh-muc', 'uses' => 'CategoryController@getAddCategory']);

        //root/admin/danh-muc/post-them-category
        Route::post('post-them-category/',['as'=>"post-them-category",'uses'=>'CategoryController@postAddCategory']);

        //root/admin/danh-muc/sua-danh-muc/1
        Route::get("sua-danh-muc/{id}", ['as' => 'sua-danh-muc', 'uses' => 'CategoryController@getEditCategory']);

        //root/admin/danh-muc/post-sua-danh-muc/1
        Route::post("post-sua-danh-muc/{id}", ['as' => 'post-sua-danh-muc', 'uses' => 'CategoryController@postEditCategory']);

        //root/admin/danh-muc/them-danh-muc
        Route::get("xoa-danh-muc/{id}", ['as' => 'xoa-danh-muc', 'uses' => 'CategoryController@getDeleteCategory']);
    });*/

    Route::get('list-danh-muc','CategoryController@listCategory')->name('list-danh-muc');
    Route::get("them-danh-muc", ['as' => 'them-danh-muc', 'uses' => 'CategoryController@getAddCategory']);
    Route::post('post-add-category',['as'=>"post-add-category",'uses'=>'CategoryController@postAddCategory']);
    Route::get("sua-danh-muc/{id}", ['as' => 'sua-danh-muc', 'uses' => 'CategoryController@getEditCategory']);
    Route::post("post-sua-danh-muc/{id}", ['as' => 'post-sua-danh-muc', 'uses' => 'CategoryController@postEditCategory']);
    Route::get("xoa-danh-muc/{id}", ['as' => 'xoa-danh-muc', 'uses' => 'CategoryController@DeleteCategory']);

    Route::get('list-chi-tiet-danh-muc/{categorydetail}','CategoryController@getDetailCategory')->name('list-chi-tiet-danh-muc');

    Route::get('customer','CustomerController@getInformationCustomer')->name('customer');

    Route::get('sua-status/{id}','CustomerController@getEditStatus')->name('sua-status');
    Route::post('post-sua-status/{id}','CustomerController@postEditStatus')->name('post-sua-status');

});

//TODO phần làm thêm cho giao diện người dùng

Route::get('list-detail-san-pham/{name}','ProductController@getListDetailProduct')->name('list-detail-san-pham');
Route::post('post-comment/{id}','ProductController@postComment')->name('post-comment');

//Todo Tìm kiếm có gợi ý

//Route::get('hienthisanpham','MyController@hienthi');
Route::get('timkiem','MyController@timkiem')->name("timkiem");
Route::get('goiytimkiem', ['as'=>'goiytimkiem', 'uses'=>'MyController@goiytimkiem']);


