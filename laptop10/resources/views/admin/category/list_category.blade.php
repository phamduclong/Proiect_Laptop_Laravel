@extends('admin.layouts.app')
@section('content')

    <div class="view-list-product">
        <table class="table table-bordered">
            <thead>
            <h1>Danh Mục</h1>
            <tr>
                <th>Id</th>
                <th>Tên Danh Mục</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($category as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td><a href="{{route('list-chi-tiet-danh-muc',$category->category_name)}}">{{$category->category_name}}</td>
                    <th><a href="{{route('sua-danh-muc',$category->id)}}" class="btn btn-danger">
                            <i class="fas fa-pen"></i>Edit</a>
                    </th>
                    <th><a href="{{route('xoa-danh-muc',$category->id)}}" class="btn btn-primary">
                         <i class="fas fa-trash-alt"></i>Delete</a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
