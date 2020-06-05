<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card">
                <div class="mb-6 text-center">
                    <img src="https://hotro.gen.vn/wp-content/uploads/2019/11/logo_large.png" class=" preload-me">
                </div>
                <div class="my-4 text-center"><h5>Login to genCRM</h5></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="icon text-center">
                                <i aria-hidden="true" class="fas fa-user"></i>
                            </div>

                            <div class="col-md-10 text-center">
                                <input id="username" type="text" class="form-control" name="username" required autocomplete="username" autofocus>
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="icon text-center">
                                <i aria-hidden="true" class="fas fa-lock"></i>
                            </div>

                            <div class="col-md-10 text-center">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <a href="{{url('facebook/redirect')}}">Login With Facebook</a>
                            </div>

                        </div>



                        <div class="form-group row">
                            <div class="col-md-12 text-center" style="color: red">
                                @if(isset($message))
                                    {{$message}}
                                @endif
                            </div>

                        </div>




                        <div class="form-group row">
                            <div class="col-md-6">
                                    <a class="btn btn-link" href="{{ route('changepassword') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            </div>
                            <div class="col-md-6 text-right">
                                    @if (Route::has('register'))
                                            <a class="btn btn-link" href="{{ route('register') }}">{{ __('Create account') }}</a>
                                    @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
