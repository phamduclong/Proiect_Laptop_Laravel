<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use DB;
class  CategoryController extends Controller
{
    //
    /*function listCategory(){
        $categories=Category::all();
        return view('admin.category.list_category',compact('categories'));
    }
    function getAddCategory()
    {
        return view ('admin.category.add_category');
    }
    function postAddCategory(Request $request){
        $post=$request->all();
        $request->validate([
            'category_name' => 'required|unique:categories|max:255',
            'ordering' => 'required',
            'description' => 'required'
        ]);
        $category=new Category();
        $category->category_name=$post['category_name'];
        $category->ordering=$post['ordering'];
        $category->description=$post['description'];
        $category->parent=$post['parent'];
        $category->publish=1;
        if($category->save()){
            if($request->hasFile('image_category')){
                $file=$request->image_category;
                $random=random_int(10000,99999);
                $file->move('upload/categories', $random.$file->getClientOriginalName());
                $category->image_category="upload/categories/".$random.$file->getClientOriginalName();
                $category->save();
            }
        }
        return redirect(route('list-danh-muc'));


    }
    function postEditCategory($id,Request $request){
        $post=$request->all();
        $request->validate([
            'category_name' => 'required|unique:categories,id|max:255',
            'ordering' => 'required',
            'description' => 'required'
        ]);
        $category=Category::find($id);
        $category->category_name=$post['category_name'];
        $category->ordering=$post['ordering'];
        $category->description=$post['description'];
        $category->parent=$post['parent'];
        $category->publish=1;
        if($category->save()){
            if($request->hasFile('image_category')){
                $file=$request->image_category;
                $random=random_int(10000,99999);
                $file->move('upload/categories', $random.$file->getClientOriginalName());
                $category->image_category="upload/categories/".$random.$file->getClientOriginalName();
                $category->save();
            }
        }
        return redirect(route('list-danh-muc'));


    }*/
    public function listCategory(){
        $category = Category::all();
        return view('admin.category.list_category',compact('category'));
    }
    function getAddCategory()
    {
        return view ('admin.category.add_category');
    }

    function postAddCategory(Request $request){
        $post=$request->all();
        $request->validate([
            'category_name' => 'required'

        ]);
        $category=new Category();
        $category->category_name=$post['category_name'];
        $category->save();
        return redirect(route('list-danh-muc'));


    }

    function getEditCategory($id){
        $category=Category::find($id);
        return view('admin.category.edit_category',compact('category'));
    }

    function postEditCategory($id,Request $request){
        $post=$request->all();
        $request->validate([
            'category_name' => 'required'

        ]);
        $category=Category::find($id);
        $category->category_name=$post['category_name'];
        $category->save();
        return redirect(route('list-danh-muc'));


    }

    function DeleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        return redirect (route('list-danh-muc'));

    }

    function getDetailCategory($categorydetail){
        $products = DB::table('products')->where('category_name',$categorydetail)->get();
        return view('admin.category.list_detail_category',compact('products'));
    }
}
