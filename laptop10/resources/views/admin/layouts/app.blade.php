<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@if(Session::has('username'))
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                   {{-- @guest
                       <li class="nav-item">
                            <a class="nav-link" href="{{ route('dangnhap') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest--}}

                    <a class="btn btn-primary" href="{{route('home')}}">Logout</a>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="row">
            <div class="col-md-3">

                <input class="form-control" placeholder="Hello...">
                <div class="buttonadmin">
                    <div class="col-md-12">
                        <a href="{{route('homeadmin')}}">
                            <button>
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('danh-sach-san-pham')}}">
                            <button>
                                <i class="fas fa-list"></i>
                                <span>Danh sách sản phẩm</span>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('them-san-pham')}}">
                            <button>
                                <i class="fas fa-plus"></i>
                                <span>Thêm sản phẩm</span>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('list-danh-muc')}}">
                        {{--<a href="{{route('list-danh-muc')}}">--}}
                            <button>
                                <i class="fas fa-text-width"></i>
                                <span>Thể loại</span>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('them-danh-muc')}}">
                            <button>
                                <i class="fas fa-plus"></i>
                                <span>Thêm Thể loại</span>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('customer')}}">
                            <button>
                                <i class="fas fa-users"></i>
                                <span>Khách hàng</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">@yield('content')</div>
        </div>

    </main>





</div>

@else
    <div align="center" style="color: white">
        <h1>Bạn Không Truy Cập Được Trang Web</h1>
        <h2>Vui Lòng Đăng Nhập Với Tư Cách Admin</h2>
    </div>
@endif
</body>
</html>
