@extends('admin.layouts.app')
@section('content')
    <div class="view-edit-product">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Sửa sản phẩm</h1>
        <form action="{{route('post-sua-san-pham',$product->id)}}" method="post" enctype="multipart/form-data">
            <table class="table table-bordered themsanpham">
                <tr>
                    <th>Product name</th>
                    <th><input type="text" class="form-control" value="{{$product->product_name}}" name="product_name"></th>
                </tr>
                <tr>
                    <th>Product image intro</th>
                    <th>
                        <img width="100" height="auto" class="product-image-intro-edit" src="{{url('/')}}/{{$product->product_image_intro}}">
                        <input type="file" class="form-control" name="product_image_intro">
                    </th>
                </tr>
                <tr>
                    <th>Category</th>
                    <th>
                        <select name="category_name">
                            @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>Publish</th>
                    <th>

                        <select name="publish">
                            <option  <?php echo $product->publish==1?' selected ':'' ?> value="1">Yes</option>
                            <option <?php echo $product->publish==0?' selected ':'' ?> value="0">No</option>
                        </select>

                    </th>
                </tr>
                <tr>
                    <th>price</th>
                    <th>
                        <input type="text" name="price" value="{{$product->price}}" class="form-control">
                    </th>
                </tr>
                <tr>
                    <th>Sale price</th>
                    <th>
                        <input type="text" name="sale_price" value="{{$product->sale_price}}" class="form-control">
                    </th>
                </tr>
                {{--<tr>
                    <th>Ordering</th>
                    <th>
                        <input type="text" name="ordering" value="{{$product->ordering}}" class="form-control">
                    </th>
                </tr>--}}
                <tr>
                    <th>Description</th>
                    <th>
                        <textarea class="form-control" name="description">{{$product->description}}</textarea>
                    </th>
                </tr>
               {{-- <tr>
                    <th>Full description</th>
                    <th>
                        <textarea class="form-control" id="full_description" name="full_description">{{$product->full_description}}</textarea>
                    </th>
                </tr>--}}
                <tr>
                    <td colspan="2">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-danger">Save</button>
                            <a href="{{route('danh-sach-san-pham')}}" class="btn btn-primary">Cancel</a>
                        </div>
                    </td>
                </tr>
            </table>
            {{csrf_field()}}
        </form>
        <script type="text/javascript">
            //CKEDITOR.replace( 'full_description' );
        </script>
    </div>
@endsection
