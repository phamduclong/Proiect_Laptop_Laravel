<?php
namespace App\Http\Controllers\admin;


use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class ProductController extends Controller
{
    //
    function getListProduct(){
        $products=Product::orderBy('id','DESC')->get();

        //todo để đây lát nữa làm
        return view('admin.product.list_product',compact('products'));

    }
   /* function getHome(){
        return view ('admin.product.homeadmin',compact ('product'));
    }*/

    function getAddProduct(){
        $category = Category::all();
        //$category_name = $category->category_name;

        return view('admin.product.add_new_item',compact('category'));
    }
    function DeleteProduct($id){
        $product=Product::find($id);
        $product->delete();
        return redirect (route('danh-sach-san-pham'));

    }
    function getEditProduct($id){
        $product=Product::find($id);
        $category = Category::all();
        return view('admin.product.edit_item',compact('product','category'));
    }
    function postAddProduct(Request $request){
        $post=$request->all();

        $request->validate([
            'product_name' => 'required|unique:products|max:255',
            //'category_id' => 'required',
            'price' => 'required',
            /*'ordering' => 'required',*/
            //TODO lat nua phai lam upload product
            //'product_image_intro' => 'required',
            'description' => 'required',
            /*'full_description' => 'required'*/
        ]);


        $productModel=new Product();
        $productModel->product_name=$post['product_name'];
        $productModel->category_name=$post['category_name'];
        $productModel->publish=$post['publish'];
        $productModel->price=$post['price'];
        $productModel->sale_price=$post['sale_price'];
       /* $productModel->ordering=$post['ordering'];*/
        $productModel->description=$post['description'];
       /* $productModel->full_description=$post['full_description'];*/
        $productModel->created_at=date('Y-m-d H:i:s');
        $productModel->updated_at=date('Y-m-d H:i:s');
        if($productModel->save()){
            if ($request->hasFile('product_image_intro')) {
                $file = $request->product_image_intro;
                // nếu cần validate file upload lên thì sử dụng mấy biến này
                $file_name=$file->getClientOriginalName();
                $extension_file=$file->getClientOriginalExtension();
                $temp_file=$file->getRealPath();
                $file_size=$file->getSize();
                $file_type=$file->getMimeType();
                $random=random_int(10000,50000);
                $file->move('upload/products', $random.$file->getClientOriginalName());
                $productModel->product_image_intro="upload/products/".$random.$file->getClientOriginalName();
                $productModel->save();
            }
        }


        return redirect(route('danh-sach-san-pham'));
    }
    function postEditProduct($id,Request $request){

        $post=$request->all();

        $request->validate([
            'product_name' => 'required|unique:products,id|max:255',
            //'category_id' => 'required',
            'price' => 'required',
            /*'ordering' => 'required',*/
            //TODO lat nua phai lam upload product
            //'product_image_intro' => 'required',
            'description' => 'required',
            /*'full_description' => 'required'*/
        ]);


        $productModel=Product::find($id);
        $productModel->product_name=$post['product_name'];
        $productModel->category_name=$post['category_name'];
        $productModel->publish=$post['publish'];
        $productModel->price=$post['price'];
        $productModel->sale_price=$post['sale_price'];
        /*$productModel->ordering=$post['ordering'];*/
        $productModel->description=$post['description'];
        /*$productModel->full_description=$post['full_description'];*/
        $productModel->created_at=date('Y-m-d H:i:s');
        $productModel->updated_at=date('Y-m-d H:i:s');
        if($productModel->save()){
            if ($request->hasFile('product_image_intro')) {
                $file = $request->product_image_intro;
                // nếu cần validate file upload lên thì sử dụng mấy biến này
                $file_name=$file->getClientOriginalName();
                $extension_file=$file->getClientOriginalExtension();
                $temp_file=$file->getRealPath();
                $file_size=$file->getSize();
                $file_type=$file->getMimeType();
                $random=random_int(10000,50000);
                $file->move('upload/products', $random.$file->getClientOriginalName());
                $productModel->product_image_intro="upload/products/".$random.$file->getClientOriginalName();
                $productModel->save();
            }
        }


        return redirect(route('danh-sach-san-pham'));
    }
}
