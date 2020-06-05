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
        <hr style="color: #f8a136"/>
    </div>

    <div class="laptopprice container">
        <h1>Laptop {{$name}}</h1>
    </div>

    @if($number != 0)
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <aside class="leftcate">
            <div id="product-list" data-cate="laptop" class="lstlaptop">
                <div class="cate mo-tl row">
                    @foreach($products as $product)
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
     @else

                <div class="container">
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <aside class="leftcate">
                        <div id="product-list" data-cate="laptop" class="lstlaptop">
                            <div class="cate mo-tl row" style="font-weight:bold;font-size:40px">
                                Hiện Tại Không Có Sản Phẩm Trong Kho
                            </div>
                        </div>
                    </aside>
     @endif

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
