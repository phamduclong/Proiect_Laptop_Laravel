@extends('layouts.app')
@section('content')
    <div class="view-product-detail">
        <form action="{{route('add-to-cart',$product->id)}}" method="post">
        <!--<form action="route('add-to-cart',$product->id)}}" method="post">-->
        <div class="container">
            <h3>{{$product->product_name}}</h3>
            <hr>
            <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="ava">
                            <img width="300px" height="auto" alt="Acer Swift 3 SF315 52 38YQ i3 8130U/4GB/1TB/Win10 (NX.GZBSV.003)" src="{{url('/')}}/{{$product->product_image_intro}}">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div>
                            <div class="props">
                                <span class="dotted">RAM 4 GB</span>
                                <span class="dotted">Ổ cứng 1TB</span>
                            </div>
                            Giá: <strong> {{number_format ($product->price,0,'',',')}}₫</strong>
                        </div>
                        <div class="promotion">
                            <span class="plabel"><i></i>Khuyến mãi</span>
                            <div>
                                <span class="promo" data-id="548904">
                                    <i class="numeric">1</i>
                                    Mua kèm Office 365 Personal ưu đãi giảm
                                    <b>{{number_format ($product->sale_price,0,'',',')}}₫</b>
                                </span>
                                <span class="promo" data-id="548904">
                                    <i class="numeric">2</i> Balo Laptop HP-Compaq
                                    <small style="color: #666">(Hết quà hoàn tiền 100.000₫)</small>
                                </span>
                            </div>
                            <aside>
                                <p>Quà khuyến mãi(1 hình)</p>
                                <img src="https://cdn.tgdd.vn/Products/Images/2102/73874/balo-acer-khuyen-mai-200x200.jpg" width="50" height="50">
                            </aside>
                            </span>
                            <span>Tặng Balo Acer và <b>1 K.mãi</b> khác</span>
                        </div>
                        <div class="quality"><span class="quality">Số lượng</span>
                            <select name="quality">
                                @for($i=1;$i<=10;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor;
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Mua hàng</button>
                        <hr>
                        <div class="callorder">
                            <span>Gọi đặt mua:
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:18001061">1800.1061</a> (7:30-22:00)
                            </span>
                        </div>
                        {{csrf_field()}}
                    </div>
                    <div class="col-md-3">
                        <div class="checkstockbox">
                            <a href="#">
                                <i class="fas fa-map-marker-alt"></i>
                                Đặt giữ hàng tại siêu thị
                            </a>
                        </div>
                        <div class="policy_intuitive">
                            <div class="for-mobile">
                                <h4>Mua như vua - chăm sóc như vip</h4>
                                <ul class="policy_new">
                                    <li>
                                        <span>
                                            <i class="fas fa-ambulance"></i>
                                        </span>
                                        <p>Lỗi là đổi mới trong <b>1 tháng</b> tại 2017 siêu thị toàn quốc.

                                        </p>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fas fa-mobile"></i>
                                        </span>
                                        <p>Đổi trả và bảo hành cực dễ <b>chỉ cần số điện thoại</b>
                                        </p>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fas fa-shield-alt"></i>
                                        </span>
                                        <p>Bảo hành <b>chính hãng thân máy 1 năm</b>
                                        </p>
                                    </li>
                                </ul>
                                <ul class="policy">
                                    <li>
                                        <span>
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <p>Trong hộp có:
                                            <a href="#" data-modal="">
                                                <b>Sách hướng dẫn, Thùng máy, Adapter sạc</b>
                                            </a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </div>


    <div class="view-product-detail">
            <div class="container">
                <hr>
                <form method="post" action="{{route('post-comment',$product->id)}}">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="form-group" align="left">
                                <label for="comment" style="font-weight:bold;font-size:25px">Bình luận:</label>
                                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width:90px">Gửi</button>
                        </div>

                    </div>


                    {{csrf_field()}}
                </form>
            </div>
    </div>


    <div class="view-product-detail">
        <div class="container" style="background-color: #636b6f">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="form-group" align="left">
                        <label for="comment" style="font-weight:bold;font-size:25px">Bình luận khác:</label>
                       @if(isset($getreviews))
                           @foreach($getreviews as $getreview)
                               <div class="row">
                                   <div class="col-md-1" align="right">
                                       @if($getreview->facebook == 'no')
                                           <img src="{{url('/')}}/{{$getreview->avatar}}" width="50px">
                                       @else
                                           <img src="{{$getreview->avatar}}" width="50px">
                                       @endif

                                   </div>
                                   <div class="col-md-11" align="left">
                                       <ul style="list-style: none">
                                           <li>
                                               <div style="font-weight:bold;color: white">{{$getreview->accout}}:</div>

                                               <div style="color:#dcdfe6">{{$getreview->comment_product}}</div>
                                           </li>
                                       </ul>
                                   </div>
                               </div>


                           @endforeach
                       @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


