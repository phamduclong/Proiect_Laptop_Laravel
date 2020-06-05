@extends('admin.layouts.app')
@section('content')
    <div class="view-list-product">
        <table class="table table-bordered">
            <thead>
            <h1>Thông tin cá nhân</h1>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                {{--<th>Published</th>--}}
                <th>Gender</th>
                {{--<th>ordering</th>--}}
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>

            </tr>
            </thead>
            <tbody>
            @foreach($customer as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->first_name}}</td>
                    <td>{{$customer->last_name}}</td>
                    {{--<td>{{$product->published}}</td>--}}
                    <td>{{$customer->gender}}</td>
                    {{--<td>{{$product->ordering}}</td>--}}
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->phone}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="view-list-product">

            <table class="table table-bordered">
                <thead>
                <h1>Đơn đặt hàng</h1>
                <tr>
                    <th>Id</th>
                    <th>Customer Id</th>
                    <th>Total</th>
                    {{--<th>Published</th>--}}
                    <th>Status</th>
                    <th></th>
                    {{--<th>ordering</th>--}}


                </tr>
                </thead>
                <tbody>


                @foreach($order as $order)

                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->customer_id}}</td>
                        <td>{{$order->total}}</td>
                        {{--<td>{{$product->published}}</td>--}}
                        {{--<td>{{$order->status}}</td>--}}
                        <td>
                            {{$order->status}}
                        </td>

                        <td><a href="{{route('sua-status',$order->id)}}" class="btn btn-primary">Edit</a></td>

                        {{--<td>{{$product->ordering}}</td>--}}

                    </tr>

                @endforeach




                </tbody>

            </table>







    </div>

    <div class="view-list-product">
        <table class="table table-bordered">
            <thead>
            <h1>Chi tiết các đơn đặt hàng</h1>
            <tr>
                <th>Id</th>
                <th>Order Id</th>
                <th>Product Id</th>
                {{--<th>Published</th>--}}
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quatity</th>
                <th>Product Sale Price</th>
                {{--<th>ordering</th>--}}


            </tr>
            </thead>
            <tbody>
            @foreach($order_product as $order_product)
                <tr>
                    <td>{{$order_product->id}}</td>
                    <td>{{$order_product->order_id}}</td>
                    <td>{{$order_product->product_id}}</td>
                    {{--<td>{{$product->published}}</td>--}}
                    <td>{{$order_product->product_name}}</td>
                    <td>{{$order_product->product_price}}</td>
                    <td>{{$order_product->product_qty}}</td>
                    <td>{{$order_product->product_sale_price}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
