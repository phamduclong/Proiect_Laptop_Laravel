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
                <a href="login" class="router-link-active">
                    <img src="https://hotro.gen.vn/wp-content/uploads/2019/11/logo_large.png" alt="Viblo Accounts" class="logo-image">
                </a>
            </div>
            <div class="card">
                <div class="col-md-12">
                    <h1 class="card-title">
                        Register account for genCRM
                    </h1>
                    <p class="card-subtitle mt-2">
                        Welcome to <strong>genCRM</strong>!
                        Join us to find useful information required to improve your skills.
                        Please fill your info into the form below to continue.
                    </p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('checkregister') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6 text-center">
                                <input placeholder="Your name" class="form-control" id="name" type="text"  name="name"  required autocomplete="name" autofocus>
                            </div>
                            <div class="col-md-6 text-center">
                                <input placeholder="Email address" class="form-control" id="email" type="email"  name="email" required autocomplete="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <input placeholder="Password" class="form-control" id="password" type="password"  name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <input placeholder="Confirm your password" class="form-control" class="inputitem" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
