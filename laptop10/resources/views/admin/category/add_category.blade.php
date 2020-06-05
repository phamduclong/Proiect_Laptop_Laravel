@extends('admin.layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger" align="center">
            <h1 style="color: red">Vui Lòng Nhập Thông Tin</h1>
        </div>
    @endif
    <h1>Thêm Danh Mục</h1>
    <form action="{{route('post-add-category')}}" method="post" enctype="multipart/form-data">
        <table class="table table-bordered themsanpham">
            <tr>
                <th>Category name</th>
                <th><input type="text" class="form-control" name="category_name"></th>
            </tr>

            <tr>
                <td colspan="2">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-danger">Save</button>
                        <a type="submit" class="btn btn-primary" href="{{route('list-danh-muc')}}">Cancel</a>
                    </div>
                </td>
            </tr>
        </table>
        {{csrf_field()}}
    </form>

@endsection
