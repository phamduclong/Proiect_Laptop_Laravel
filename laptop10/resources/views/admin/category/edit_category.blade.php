@extends('admin.layouts.app')
@section('content')
    <div class="view-edit-product">
        @if ($errors->any())
            <div class="alert alert-danger" align="center">
                <h1 style="color: red">Vui Lòng Nhập Thông Tin</h1>
            </div>
        @endif
        <h1>Sửa Danh Mục</h1>
        <form action="{{route('post-sua-danh-muc',$category->id)}}" method="post" enctype="multipart/form-data">
            <table class="table table-bordered themsanpham">
                <tr>
                    <th>Category name</th>
                    <th><input type="text" class="form-control" value="{{$category->category_name}}" name="category_name"></th>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-danger">Save</button>
                            <a href="{{route('list-danh-muc')}}" class="btn btn-primary">Cancel</a>
                        </div>
                    </td>
                </tr>
            </table>
            {{csrf_field()}}
        </form>

    </div>
@endsection
