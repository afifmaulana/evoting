<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Login Super Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset ('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{ asset ('assets/css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset ('assets/css/pages/extra_pages.css') }}" rel="stylesheet" />
</head>
<body class="login-page">
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
                <form class="login100-form" method="post" action="{{route('superadmin.login.submit')}}">
                @csrf
                <span class="login100-form-logo">
                    <img alt="" src="{{ asset ('assets/images/loading.png') }}">
                </span>
                <span class="login100-form-title p-b-34 p-t-27">Login SuperAdmin</span>
                <div class="row">

                    <div class="wrap-input100">
                        <input class="input100 @error('email') is-invalid @enderror"  value="{{ old('email') }}"
                               type="email" name="email" placeholder="Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="material-icons focus-input1001">person</i>
                    </div>

                    <div class="wrap-input100">
                        <input class="input100 @error('password') is-invalid @enderror"
                               type="password" name="password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="material-icons focus-input1001">person</i>
                    </div>

                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign In
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- Plugins Js -->
<script src="{{ asset ('assets/js/app.min.js') }}"></script>
<!-- Extra page Js -->
<script src="{{ asset ('assets/js/pages/examples/pages.js') }}"></script>
</body>
</html>
