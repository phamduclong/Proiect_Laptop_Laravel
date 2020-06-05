<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link href="{{ asset('css/content.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{ asset('assets/frontend/fonts/fontawesome-free-5.11.2-web/css/all.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">





    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>







    <!--Đoạn mã like facebook-->
    <meta property="og:url"           content="https://www.arsenal.com/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />




</head>
<body>
<br>
<div style="z-index:100" class="navbar navbar-expand-md navbar-light bg-light">
    <form action="{{route('timkiem')}}" method="get">
        <input class="typeahead" type="text" name="tukhoa" placeholder="Bạn cần gì..." style="width:200px">
        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
        {{csrf_field()}}
    </form>
</div>
<br>


<div id="app">

    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" style="z-index: 90">
        <div class="container-fluid header">
            <a class="navbar-brand" href="{{ url('home') }}">
                <img class=" preload-me" src="https://hotro.gen.vn/wp-content/uploads/2019/11/logo_large.png">
            </a>


            {{--<form action="{{route('timkiem')}}" method="get">
                <input class="typeahead" type="text" name="tukhoa" placeholder="Bạn cần gì...">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>

                {{csrf_field()}}
            </form>--}}


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>
                            <img class="img1" src="https://laptop88.vn/template/template_2019/images/ic_laptop.png">
                            </span>
                            <span class="title">
                                Laptop
							</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
							<span>
							<img class="img1" src="https://laptop88.vn/template/template_2019/images/ic_mount.png">
							</span>
                            <span class="title">
								Linh Kiện
							</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
							<span>
								<img class="img2" src="https://laptop88.vn/template/template_2019/images/ic_new.png">
							</span>

                            <span class="title">
								Giới Thiệu
							</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
							<span>
								<img class="img2" src="https://laptop88.vn/template/template_2019/images/ic_location.png">
							</span>
                            <span class="title">
								Địa Điểm
							</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('gio-hang')}}">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="title">
								Giỏ hàng
							</span>
                        </a>
                    </li>


                    @if(Session::has('username'))
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{--<i class="fa fa-user"></i>--}}
                                @if(Session::has('avatar'))
                                <i><img src="{{Session::get('avatar')}}" width=35px></i>
                                @else
                                    <i class="fa fa-user"></i>
                                @endif
                                {{Session::get('username')}}
                                <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Sign out') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dangnhap') }}">
                                <i class="fa fa-user"></i>
                                <span class="title">{{ __('Đăng Nhập') }}</span>

                            </a>
                        </li>

                    @endif



                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
    <footer>
        <div class="plc text-center">
            <div class="row">
                <div class="col-3 col-md-3" style="border-right: 1px solid #e3e3e3">
                    <i class="fas fa-truck"></i>
                    <span>Giao hàng hoả tốc trong 90 phút</span>
                </div>
                <div class="col-3 col-md-3" style="border-right: 1px solid #e3e3e3">
                    <i class="fas fa-car"></i>
                    <span>Thanh toán linh hoạt</span>
                </div>
                <div class="col-3 col-md-3" style="border-right: 1px solid #e3e3e3">
                    <i class="fas fa-tablet-alt"></i>
                    <span>Trải nghiệm sản phẩm tại nhà</span>
                </div>
                <div class="col-3 col-md-3">
                    <i class="fas fa-phone-volume"></i>
                    <span>Hỗ trợ sử dụng. Hotline:
					<a href="tel:18001764">1800.1764</a>
				</span>
                </div>
            </div>
        </div>
        <section id="bn-promote"></section>
        <footer class="container-fluid">
            <div class="rowfoot1 row">
                <div class="col-md-3">
                    <ul class="colfoot col1">
                        <li>
                            <strong>Thông tin điện máy xanh</strong>
                        </li>
                        <li>
                            <a rel="nofollow" href="" title="Hệ thống siêu thị">
                                Hệ thống 1012 siêu thị
                                <small>(8:00 - 22:00)</small>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="" title="Giới thiệu công ty">Giới thiệu công ty</a>
                        </li>
                        <li>
                            <a href="https://vieclam.thegioididong.com" title="Tìm việc làm">Tìm việc làm</a>
                        </li>
                        <li>
                            <a rel="nofollow" href="" title="Liên hệ, góp ý">Liên hệ, góp ý</a>
                        </li>
                        <li class="hidden">
                            <a rel="nofollow" href="" title="Nội quy cửa hàng">Nội quy cửa hàng</a>
                        </li>
                        <li class="hidden">
                            <a rel="nofollow" href="https://hddt.thegioididong.com" title="In hóa đơn điện tử">
                                In hóa đơn điện tử
                            </a>
                        </li>
                        <li class="hidden">
                            <a rel="nofollow" href="" title="Bán hàng doanh nghiệp">Bán hàng doanh nghiệp</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="colfoot col2">
                        <li>
                            <strong>Hỗ trợ khách hàng</strong>
                        </li>
                        <li>
                            <a rel="nofollow" href="" title="Tìm hiểu về mua trả góp">Tìm hiểu về mua trả góp</a>
                        </li>
                        <li>
                            <a rel="nofollow" href="" title="Giao hàng, lắp đặt">Giao hàng, lắp đặt</a>
                        </li>
                        <li>
                            <a rel="nofollow" href="/" title="Bảo hành, đổi trả">Bảo hành, đổi trả</a>
                        </li>
                        <li>
                            <a rel="nofollow" href="" title="Dịch vụ vệ sinh máy lạnh, máy giặt, quạt">DV vệ sinh máy lạnh, máy giặt, quạt</a>
                        </li>
                        <li class="hidden">
                            <a rel="nofollow" href="" title="Tìm trung tâm bảo hành">Tìm trung tâm bảo hành</a>
                        </li>
                        <li class="hidden"><a rel="nofollow" href="" title="Chất lượng phục vụ">Chất lượng phục vụ</a>
                        </li>
                        <li class="hidden">
                            <a rel="nofollow" href="" title="Hướng dẫn trao thưởng">Hướng dẫn trao thưởng</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="colfoot col3">
                        <li>
                            <strong>Tổng đài hỗ trợ (Gọi miễn phí)</strong>
                            <p>Mua hàng
                                <a href="tel:18001061">1800.1061</a> (7:30 - 22:00)</p>
                            <p>Kỹ thuật
                                <a href="tel:18001764">1800.1764</a> (7:30 - 22:00)</p>
                            <p>Bảo hành
                                <a href="tel:18001065">1800.1065</a> (8:00 - 21:00)</p>
                            <p>Khiếu nại
                                <a href="tel:18001063">1800.1063</a> (8:00 - 21:30)</p>
                            <div id="DMCA-badge row">
                                <a target="_blank" rel="nofollow" class="bct" href="#">
                                    <img class="onlinegov" src="http://online.gov.vn/Content/EndUser/LogoCCDVSaleNoti/logoSaleNoti.png">
                                </a>
                                <a href="https://www.dmca.com/Protection/Status.aspx?ID=69bc7638-1181-4a0f-ab78-247bea1eab81&amp;refurl=https://www.dienmayxanh.com/laptop" title="DMCA.com Protection Status" class="dmca-badge">
                                    <img class="lazy" data-src="https://cdn.tgdd.vn/dmx2016/Content/images/dmca_protected_sml_120n.png" alt="DMCA.com Protection Status" src="https://cdn.tgdd.vn/dmx2016/Content/images/dmca_protected_sml_120n.png" style="display: inline; opacity: 1;">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="colfoot col4">
                        <li>
                            <a target="_blank" href="https://facebook.com/dienmayxanhcom" class="linkfb">
                                <i class="fab fa-facebook-f"></i> 1489.5k fan </a>
                            <a target="_blank" href="https://www.youtube.com/user/dienmaycom" class="linkyt">
                                <i class="fab fa-youtube-square" style="font-size:15px;color:red"></i> 417k đăng ký </a>
                            <br>
                            <p>Website cùng tập đoàn:</p>
                            <a class="mwg-logo" target="_blank" href="https://www.facebook.com/profile.php?id=100013752765729">
                                <h6>Diamond</h6>
                            </a>

                            @if(Session::has('avatar'))
                                <button class="btn btn-primary">
                                    <!--Like Facebook-->
                                    <!-- Load Facebook SDK for JavaScript -->
                                    <div id="fb-root"></div>
                                    <script>(function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s); js.id = id;
                                            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));</script>

                                    <!-- Your share button code -->
                                    <div class="fb-share-button"
                                         data-href="https://www.arsenal.com/"
                                         data-layout="button_count">
                                    </div>
                                </button>
                                <br><br>
                                <button class="btn btn-primary" style="width:315px">
                                    <!-- Load Facebook SDK for JavaScript -->
                                    <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0"></script>

                                    <!-- Your like button code -->
                                    <div class="fb-like"
                                         data-href="https://www.arsenal.com/"
                                         data-layout="standard"
                                         data-action="like"
                                         data-show-faces="true">
                                    </div>

                                </button>
                             @endif
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <div class="col-12 rowfoot2">
            <div class="container-fluid">
                <p>© 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH &amp; ĐT TP.HCM cấp ngày 02/01/2007. GP số 57/GP-TTĐT do Sở TTTT TP HCM cấp ngày 30/07/2018.
                    <br> Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Quận 1, TP.Hồ Chí Minh. Điện thoại: (028)3812.59.60. Email: cskh@dienmayxanh.com. Chịu trách nhiệm nội dung: Trần Nhật Linh.
                    <a rel="nofollow" href="#">Xem chính sách sử dụng web</a>
                </p>
            </div>
        </div>
    </footer>
</div>


</body>
</html>

<script type="text/javascript">
    var path = "{{ route('goiytimkiem') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>




<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
