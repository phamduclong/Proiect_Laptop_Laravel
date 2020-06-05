@extends('admin.layouts.app')
@section('content')
    <div class="view-edit-product">
        <h1>Sửa Trạng Thái Đơn Hàng</h1>
        <form action="{{route('post-sua-status',$order->id)}}" method="post" enctype="multipart/form-data">
            <table class="table table-bordered themsanpham">
                <tr>
                    <th>Id</th>
                    <th><input type="text" class="form-control" value="{{$order->id}}" name="id"></th>
                </tr>
                <tr>
                    <th>Customer Id</th>
                    <th><input type="text" class="form-control" value="{{$order->customer_id}}" name="customer_id"></th>
                </tr>
                <tr>
                    <th>Total</th>
                    <th><input type="text" class="form-control" value="{{$order->total}}" name="total"></th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>

                        <select name="status">
                                    <option  <?php echo $order->status=='Pending'?' selected ':'' ?> value="Pending">Pending</option>
                                    <option  <?php echo $order->status=='Completed'?' selected ':'' ?> value="Completed">Completed</option>
                                    <option  <?php echo $order->status=='Cancel'?' selected ':'' ?> value="Cancel">Cancel</option>
                        </select>

                    </th>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-danger">Save</button>
                            <a href="{{route('customer')}}" class="btn btn-primary">Cancel</a>
                        </div>
                    </td>
                </tr>
            </table>
            {{csrf_field()}}
        </form>
    </div>
@endsection
