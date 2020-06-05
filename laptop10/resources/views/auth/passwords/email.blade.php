<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="mx-auto col-sm-12 col-md-10 col-lg-8 col-xl-6">
            <div class="logo logo--medium text-center">
                <a href="" class="router-link-active">
                    <img src="https://hotro.gen.vn/wp-content/uploads/2019/11/logo_large.png" alt="Viblo Accounts" class="logo-image">
                </a>
            </div>
            <div class="card">
                <div class="col-md-12">
                    <h1 class="card-title">
                        Forgot Your Password
                    </h1>
                    <p class="card-subtitle mt-2">
                        You forgot your password? Don't worry! Give us the email which is used to register your Viblo account. We'll mail you a link to reset your password.
                    </p>
                    <p class="card-subtitle mt-2">
                        * You email address
                    </p>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('checkchangepassword') }}">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                New Password
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <input id="newpassword" type="password" class="form-control" name="newpassword" required autocomplete="newpassword" autofocus>
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Change') }}
                                </button>
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
