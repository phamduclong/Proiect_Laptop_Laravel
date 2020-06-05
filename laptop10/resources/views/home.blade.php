@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="bannerhome">
            <div class="row">
                <div class="col-md-8 bannerleft">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators" style="opacity: 0">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                            <li data-target="#demo" data-slide-to="4"></li>
                            <li data-target="#demo" data-slide-to="5"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://cdn.tgdd.vn/2019/12/banner/800-170-800x170-1.png" alt="Los Angeles" width="100%" height="200px">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.tgdd.vn/2019/10/banner/800-170-800x170-(39).png" width="100%" height="200px">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.tgdd.vn/2019/11/banner/macbook-800-170-800x170.png" alt="New York" width="100%" height="200px">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.tgdd.vn/2019/11/banner/800-170-800x170-(89).png" alt="New York" width="100%" height="200px">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.tgdd.vn/2019/11/banner/800-170-800x170-(85).png" alt="New York" width="100%" height="200px">
                            </div>
                            <div class="carousel-item">
                                <img src="https://cdn.tgdd.vn/2019/11/banner/800-170-800x170-(92).png" alt="New York" width="100%" height="200px">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 row bannerright">
                    <div class="col-6 col-md-12">
                        <a href="#" class="imgbanneright text-center">
                            <img style="cursor:pointer" src="https://cdn.tgdd.vn/2019/11/banner/390-80-390x80-(16).png" alt="laptop" width="390" height="80">
                        </a>
                    </div>
                    <div class="col-6 col-md-12">
                        <a href="#" class="text-center">
                            <img style="cursor:pointer" src="https://cdn.tgdd.vn/qcao/31_12_2018_19_01_50_sticky-390-80.png" alt="2018 - DE - Sticky Laptop" width="390" height="80">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--laptopmanu--}}
        <?php
            $macbook = 'Macbook';
            $hp = 'HP';
            $asus = 'Asus';
            $dell = 'Dell';
            $lenovo = 'Lenovo';
            $acer = 'Acer';
            $msi = 'MSI';
        ?>
        <div class="col-6 col-md-12 laptopmanu">
            <a href="{{route('list-detail-san-pham',$macbook)}}" style="padding:0">
                <img src="https://cdn.tgdd.vn/Brand/2/Macbook---iMac44-s_55.png">
                <input type="hidden" name="manu_203" value="0">
            </a>
            <a href="{{route('list-detail-san-pham',$hp)}}" style="padding:0">
                <img src="https://cdn.tgdd.vn/Brand/2/HP-Compaq44-s_56.png">
                <input type="hidden" name="manu_122" value="0">
            </a>
            <a href="{{route('list-detail-san-pham',$asus)}}" style="padding:0">
                <img src="https://cdn.tgdd.vn/Brand/2/Asus44-s_56.png">
                <input type="hidden" name="manu_128" value="0">
            </a>
            <a href="{{route('list-detail-san-pham',$dell)}}" style="padding:0">
                <img src="https://cdn.tgdd.vn/Brand/2/Dell44-s_56.png">
                <input type="hidden" name="manu_118" value="0">
            </a>
            <a href="{{route('list-detail-san-pham',$lenovo)}}" style="padding:0">
                <img src="https://cdn.tgdd.vn/Brand/2/Lenovo44-s_57.png">
                <input type="hidden" name="manu_120" value="0">
            </a>
            <a href="{{route('list-detail-san-pham',$acer)}}" style="padding:0">
                <img src="https://cdn.tgdd.vn/Brand/2/Acer44-s_57.png">
                <input type="hidden" name="manu_119" value="0">
            </a>
            <a href="{{route('list-detail-san-pham',$msi)}}" style="padding:0">
                <img src="https://cdn.tgdd.vn/Brand/2/MSI44-s_0.png">
                <input type="hidden" name="manu_133" value="0">
            </a>
        </div>

        <hr style="color: #f8a136"/>


        <div class="col-md-12 laptopbuild">
            <p> CHỌN LAPTOP THEO YÊU CẦU</p>
            <a href="#" class="imglaptop"> <img src="https://cdn.tgdd.vn/dmx2016/Content/images/2019/Laptop/desktop/hoc-tap-van-phong-v2.png"> </a>
            <a href="#" class="imglaptop"> <img src="https://cdn.tgdd.vn/dmx2016/Content/images/2019/Laptop/desktop/do-hoa-ky-thuat-v2.png"> </a>
            <a href="#" class="imglaptop"> <img src="https://cdn.tgdd.vn/dmx2016/Content/images/2019/Laptop/desktop/laptop-gaming-v2.png"> </a>
            <a href="#" class="imglaptop"> <img src="https://cdn.tgdd.vn/dmx2016/Content/images/2019/Laptop/desktop/cao-cap-sang-trong-v2.png"> </a>
            <a href="#" class="imglaptop1"> <img src="https://cdn.tgdd.vn/dmx2016/Content/images/2019/Laptop/desktop/mong-nhe-thoi-trang-v3.jpg"> </a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="list-shock">
            <div class="head-title">
                <img src="https://cdn.tgdd.vn/dmx2016/Content/images/2019/Laptop/desktop/laptopgiasoc-desk.png">
                <h3>Top Laptop Bán Chạy</h3>
            </div>
            <div class="lstlaptop">
                <div class="cate owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer row">
                        <div class="col-6 col-md-3 owl-item" style="width: 239px; height: 411px; border-right: 1px solid #e3e3e3;border-bottom: 1px solid #e3e3e3;">
                            <div>
                                <a href="#">
                                    <div class="ava">
                                        <img width="100" height="100" alt="Acer Swift 3 SF315 52 38YQ i3 8130U/4GB/1TB/Win10 (NX.GZBSV.003)" src="https://cdn.tgdd.vn/Products/Images/44/208863/acer-swift-sf315-52-38yq-i3-8130u-4gb-1tb-156f-win-600x600.jpg">
                                    </div>
                                    <label class="lbldiscount lbl"><i class="fas fa-bolt"></i>GIẢM 2.000.000₫</label>
                                    <div class="props">
                                        <span class="dotted">RAM 4 GB</span>
                                        <span class="dotted">Ổ cứng 1TB</span>
                                    </div>
                                    <h3>Acer Swift 3 SF315 52 38YQ i3 8130U (NX.GZBSV.003)</h3>
                                    <strong> 13.490.000₫</strong>
                                </a>
                            </div>
                            <div class="promotion">
                                <div class="imgpromotion">
									<span>
										<img src="https://cdn.tgdd.vn/Products/Images/2102/73874/balo-acer-khuyen-mai-200x200.jpg" width="50" height="50">
									</span>
                                </div>
                                <div class="promotion-text">
                                    <span>Tặng Balo Acer và <b>1 K.mãi</b> khác</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 owl-item" style="width: 239px; height: 411px; border-right: 1px solid #e3e3e3;border-bottom: 1px solid #e3e3e3;">
                            <div>
                                <a href="#">
                                    <div class="ava">
                                        <img width="100" height="100" alt="Acer Swift 3 SF315 52 38YQ i3 8130U/4GB/1TB/Win10 (NX.GZBSV.003)" src="https://cdn.tgdd.vn/Products/Images/44/210200/acer-switch-sw512-52p-34rs-i3-7130u-4gb-128gb-win10-600x600.jpg">
                                    </div>
                                    <label class="lbldiscount lbl"><i class="fas fa-bolt"></i>GIẢM 2.000.000₫</label>
                                    <div class="props">
                                        <span class="dotted">RAM 4 GB</span>
                                        <span class="dotted">Ổ cứng 1TB</span>
                                    </div>
                                    <h3>Acer Swift 3 SF315 52 38YQ i3 8130U (NX.GZBSV.003)</h3>
                                    <strong> 13.490.000₫</strong>
                                </a>
                            </div>
                            <div class="promotion">
                                <div class="imgpromotion">
									<span>
										<img src="https://cdn.tgdd.vn/Products/Images/2102/73874/balo-acer-khuyen-mai-200x200.jpg" width="50" height="50">
									</span>
                                </div>
                                <div class="promotion-text">
                                    <span>Tặng Balo Acer và <b>1 K.mãi</b> khác</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 owl-item" style="width: 239px; height: 411px; border-right: 1px solid #e3e3e3;">
                            <div>
                                <a href="#">
                                    <div class="ava">
                                        <img width="100" height="100" alt="Acer Swift 3 SF315 52 38YQ i3 8130U/4GB/1TB/Win10 (NX.GZBSV.003)" src="https://cdn.tgdd.vn/Products/Images/44/207697/acer-nitro-an515-54-52ez-i5-9300h-8gb-256gb-gtx165-3-600x600.jpg">
                                    </div>
                                    <label class="lbldiscount lbl"><i class="fas fa-bolt"></i>GIẢM 2.000.000₫</label>
                                    <div class="props">
                                        <span class="dotted">RAM 4 GB</span>
                                        <span class="dotted">Ổ cứng 1TB</span>
                                    </div>
                                    <h3>Acer Swift 3 SF315 52 38YQ i3 8130U (NX.GZBSV.003)</h3>
                                    <strong> 13.490.000₫</strong>
                                </a>
                            </div>
                            <div class="promotion">
                                <div class="imgpromotion">
									<span>
										<img src="https://cdn.tgdd.vn/Products/Images/2102/73874/balo-acer-khuyen-mai-200x200.jpg" width="50" height="50">
									</span>
                                </div>
                                <div class="promotion-text">
                                    <span>Tặng Balo Acer và <b>1 K.mãi</b> khác</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 owl-item" style="width: 239px; height: 411px;">
                            <div>
                                <a href="#">
                                    <div class="ava">
                                        <img width="100" height="100" alt="Acer Swift 3 SF315 52 38YQ i3 8130U/4GB/1TB/Win10 (NX.GZBSV.003)" src="https://cdn.tgdd.vn/Products/Images/44/207682/apple-macbook-air-2019-i5-16ghz-8gb-128gb-mvfm2sa-13-32-600x600.jpg">
                                    </div>
                                    <label class="lbldiscount lbl"><i class="fas fa-bolt"></i>GIẢM 2.000.000₫</label>
                                    <div class="props">
                                        <span class="dotted">RAM 4 GB</span>
                                        <span class="dotted">Ổ cứng 1TB</span>
                                    </div>
                                    <h3>Acer Swift 3 SF315 52 38YQ i3 8130U (NX.GZBSV.003)</h3>
                                    <strong> 13.490.000₫</strong>
                                </a>
                            </div>
                            <div class="promotion">
                                <div class="imgpromotion">
									<span>
										<img src="https://cdn.tgdd.vn/Products/Images/2102/73874/balo-acer-khuyen-mai-200x200.jpg" width="50" height="50">
									</span>
                                </div>
                                <div class="promotion-text">
                                    <span>Tặng Balo Acer và <b>1 K.mãi</b> khác</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="laptopprice container">
        <h1>Laptop giá sốc</h1>
    </div>

    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <aside class="leftcate">
            <div id="product-list" data-cate="laptop" class="lstlaptop">
                <div class="cate mo-tl row">
                    @foreach($discount_products as $product)
                        <div class="col-6 col-md-3 cate-item" style="width: 239px; height: 411px;">
                        <div>
                            <a href="{{route('product-detail',$product->id)}}">
                            <!--<a href="route('product-detail',$product->id)}}">-->

                                <div class="ava">
                                    <img width="100" height="100" src="{{url('/')}}/{{$product->product_image_intro}}">
                                </div>
                                <label class="lbldiscount lbl"><i class="fas fa-bolt"></i>GIẢM {{number_format ($product->sale_price,0,'',',')}}₫</label>
                                <div class="props">
                                    <span class="dotted">RAM 4 GB</span>
                                    <span class="dotted">Ổ cứng 1TB</span>
                                </div>
                                <h3>{{$product->product_name}}</h3>
                                <strong> {{number_format ($product->price,0,'',',')}}₫</strong>
                            </a>
                        </div>
                        <div class="promotion">
                            <div class="imgpromotion">
									<span>
										<img src="https://cdn.tgdd.vn/Products/Images/2102/73874/balo-acer-khuyen-mai-200x200.jpg" width="50" height="50">
									</span>
                            </div>
                            <div class="promotion-text">
                                <span>Tặng Balo Acer và <b>1 K.mãi</b> khác</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </aside>


            <div class="laptopprice container">
                <h1>Laptop mới</h1>
            </div>
            <aside class="leftcate">
                <div id="product-list" data-cate="laptop" class="lstlaptop">
                    <div class="cate mo-tl row">
                        @foreach($new_products as $product)
                            <div class="col-6 col-md-3 cate-item" style="width: 239px; height: 411px;">
                                <div>
                                    <a href="{{route('product-detail',$product->id)}}">
                                    <!--<a href="route('product-detail',$product->id)}}">-->
                                        <div class="ava">
                                            <img width="100" height="100" src="{{url('/')}}/{{$product->product_image_intro}}">
                                        </div>

                                        <div class="props">
                                            <span class="dotted">RAM 4 GB</span>
                                            <span class="dotted">Ổ cứng 1TB</span>
                                        </div>
                                        <h3>{{$product->product_name}}</h3>
                                        <strong> {{number_format ($product->price,0,'',',')}}₫</strong>
                                    </a>
                                </div>
                                <div class="promotion">
                                    <div class="imgpromotion">
									<span>
										<img src="https://cdn.tgdd.vn/Products/Images/2102/73874/balo-acer-khuyen-mai-200x200.jpg" width="50" height="50">
									</span>
                                    </div>
                                    <div class="promotion-text">
                                        <span>Tặng Balo Acer và <b>1 K.mãi</b> khác</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </aside>


            <div id="ytb">
                <h1>GÓC TƯ VẤN CHỌN MUA LAPTOP</h1>
                <div class="row">
                    <div class="col-12 col-md-6 col50">
                        <iframe width="480" height="220" src="https://www.youtube.com/embed/fMCbZErqhtg?listType=playlist&amp;list=PLrlFKqadgE9FuBcsI7hkg9KBpyvQ5FSdo&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.dienmayxanh.com" frameborder="0" allowfullscreen="" data-gtm-yt-inspected-2727266_124="true" id="306451718" data-gtm-yt-inspected-2727266_129="true">

                        </iframe>
                    </div>
                    <div class="col-12 col-md-6 col50Nth2">
                        <div class="video">
                            <a href="#">
                                <img class="imgThmbVid" src="https://i.ytimg.com/vi/IcD9YxlYfnU/default.jpg">
                                <h3>Đánh giá Asus Vivobook S14 D409D: mỏng nhẹ, xứng đáng trong phân khúc
                                    <span>8/11/2019</span>
                                </h3>
                            </a>
                        </div>
                        <div class="video">
                            <a href="#">
                                <img class="imgThmbVid" src="https://i.ytimg.com/vi/hJuxAYHwXD4/default.jpg">
                                <h3>Đánh giá Asus Vivobook S14 D409D: mỏng nhẹ, xứng đáng trong phân khúc
                                    <span>8/11/2019</span>
                                </h3>
                            </a>
                        </div>
                        <div class="video">
                            <a href="#">
                                <img class="imgThmbVid" src="https://i.ytimg.com/vi/iX7PzoWaBA8/default.jpg">
                                <h3>Đánh giá Asus Vivobook S14 D409D: mỏng nhẹ, xứng đáng trong phân khúc
                                    <span>8/11/2019</span>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="laptopacc">
                <div>
                    <h1>PHẦN MỀM - PHỤ KIỆN LAPTOP</h1>
                </div>
                <div class="phanmem-phukien text-center">
                    <a href="/phan-mem?g=diet-virus">
				<span>
					<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/diet-virus.jpg" src="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/diet-virus.jpg" style="display: inline; opacity: 1;">
				</span>
                        <h4>Phần mềm diệt virus</h4>
                    </a>
                    <a href="/phan-mem?g=microsoft-office">
				<span>
					<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/office-365.jpg" src="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/office-365.jpg" style="display: inline; opacity: 1;">
				</span>
                        <h4>Microsoft Office</h4>
                    </a>
                    <a href="/phan-mem?g=windows-10">
				<span>
					<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/windows.jpg" src="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/windows.jpg" style="display: inline; opacity: 1;">
				</span>
                        <h4>Windows 10 bản quyền</h4>
                    </a>
                    <a href="/chuot-may-tinh">
				<span>
					<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/chuot-ban-phim.jpg" src="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/chuot-ban-phim.jpg" style="display: inline; opacity: 1;">
				</span>
                        <h4>Chuột, bàn phím</h4>
                    </a>
                    <a href="/tai-nghe">
					<span>
						<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/tai-nghe.jpg" src="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/tai-nghe.jpg" style="display: inline; opacity: 1;">
					</span>
                        <h4>Tai nghe</h4>
                    </a>
                    <a href="/loa-laptop">
					<span>
						<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/loa.jpg" src="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/loa.jpg" style="display: inline; opacity: 1;">
					</span>
                        <h4>Loa</h4>
                    </a>
                    <a href="/tag/mieng-dan-laptop">
					<span>
						<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/mieng-dan-laptop.jpg" src="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/mieng-dan-laptop.jpg" style="display: inline; opacity: 1;">
					</span>
                        <h4>Miếng dán laptop</h4>
                    </a>
                </div>
            </div>

            <div class="navirelate">
                <section>
                    <div class="catetag">
                        <div>
                            <a href="">Macbook Pro</a>
                            <a href="">Macbook Air</a>
                            <a href="">Macbook Pro 2018</a>
                            <a href="">MSI</a>
                            <a href="">Dell Inspiron</a>
                            <a href="">Macbook Air 2018</a>
                            <a href="">HP Envy 13</a>
                            <a href="">Dell Inspiron 15</a>
                            <a href="">Asus ROG</a>
                            <a href="">Dell Vostro 3568</a>
                            <a href="">HP Envy</a>
                            <a href="">Diamond</a>
                        </div>
                    </div>
                </section>
            </div>
    </div>


@endsection
