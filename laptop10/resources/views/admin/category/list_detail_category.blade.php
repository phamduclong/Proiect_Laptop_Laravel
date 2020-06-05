@extends('admin.layouts.app')
@section('content')
    <div class="view-list-product">
        <table class="table table-bordered">
            <thead>
            <h1>Sản phẩm</h1>
            <tr>
                <th>Id</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                {{--<th>Published</th>--}}
                <th>Thể Loại</th>
                {{--<th>ordering</th>--}}
                <th>Giá</th>
                <th>Giảm giá</th>
                <th>Mô tả</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->product_name}}</td>
                    <td><img width="100" height="auto" class="product-image-intro" src="{{url('/')}}/{{$product->product_image_intro}}"></td>
                    {{--<td>{{$product->published}}</td>--}}
                    <td>{{$product->category_name}}</td>
                    {{--<td>{{$product->ordering}}</td>--}}
                    <td>{{number_format ($product->price,0,'',',')}}</td>
                    <td>{{number_format ($product->sale_price,0,'',',')}}</td>
                    <td>{{$product->description}}</td>
                    <th><a href="{{route('sua-san-pham',$product->id)}}" class="btn btn-danger">
                            <i class="fas fa-pen"></i>Edit</a>
                    </th>
                    <th><a href="{{route('xoa-san-pham',$product->id)}}" class="btn btn-primary">
                            <i class="fas fa-trash-alt"></i>Delete</a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
