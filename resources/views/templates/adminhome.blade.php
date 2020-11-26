<!DOCTYPE html>
<html lang="en">

@include('templates.partials.adminhome._head')

<body>
<div id="home" class="container-scroller landing-page">
    <div class="container-fluid top-banner">
        @include('templates.partials.adminhome._navbar')
        <div class="row top-banner-content">
            <div class="col-md-8 mx-auto">
                <div class="row">
                    <div class="col-lg-7">
                        <h1> Aplikasi E-Voting OSIS</h1>
                        <p2> Segera Daftarkan Sekolah Anda</p2>
                        <div class="mt-5">
                            <a href="{{route('adminsekolah.login')}}">
                                <button class="btn btn-dark btn-lg mr-2">Masuk</button>
                            </a>
                            <a href="{{route('adminsekolah.register')}}">
                                <button class="btn btn-light btn-lg ml-2">Daftar</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="demo-image">
                            <img src="{{ asset ('assets-sekolah/images/samples/landing/page.png') }}" alt="image"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid middle-section bg-white">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h3 class="mb-5">Keunggulan E-Voting</h3>
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card card-icon-top">
                            <div class="card-body">
                                <img src="{{ asset ('assets-sekolah/images/samples/landing/voting.png') }}" alt="image"
                                     class="card-icon"/>
                                <p3 class="card-text">
                                    Mempermudah users menggunakan Aplikasi ini
                                </p3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card card-icon-top">
                            <div class="card-body">
                                <img src="{{ asset ('assets-sekolah/images/samples/landing/voting-box.png') }}" alt="image"
                                     class="card-icon"/>
                                <p3 class="card-text">
                                    Mempermudah dalam proses pemilihan ketua dan wakil OSIS terutama dalam perhitungan suara
                                </p3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card card-icon-top">
                            <div class="card-body">
                                <img src="{{ asset ('assets-sekolah/images/samples/landing/school.png') }}" alt="image"
                                     class="card-icon"/>
                                <p3 class="card-text">
                                    <br>
                                    Mengurangi biaya yang dikeluarkan oleh sekolah
                                </p3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid afif-maulana">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="row mb-5">
                    <div class="col-md-8 mx-auto">
                        <h3>Member E-Voting</h3>
                        <h6>
                            Sukseskan pemilihan ketua & wakil OSIS sekolah Anda dengan menggunakan Aplikasi E-Voting OSIS.
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                    <div class="card card-item-preview">
                        <div class="card-body">
                    <div class="col-md-3 grid-margin">
                        <img src="{{ asset ('assets-sekolah/images/samples/landing/muh1.png') }}" width="200" height="200" alt="image">
                    </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                    <div class="card card-item-preview">
                        <div class="card-body">
                    <div class="col-md-3 grid-margin">
                        <img src="{{ asset ('assets-sekolah/images/samples/landing/sma1.png') }}" width="200" height="200" alt="image">
                    </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                    <div class="card card-item-preview">
                        <div class="card-body">
                    <div class="col-md-3 grid-margin">
                        <img src="{{ asset ('assets-sekolah/images/samples/landing/sma2.png') }}" width="200" height="200" alt="image">
                    </div>
                        </div>
                </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                <div class="card card-item-preview">
                    <div class="card-body">
                    <div class="col-md-3 grid-margin">
                        <img src="{{ asset ('assets-sekolah/images/samples/landing/sma3.jpg') }}" width="200" height="200" alt="image">
                    </div>
                    </div>
                </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                <div class="card card-item-preview">
                    <div class="card-body">
                    <div class="col-md-3 grid-margin">
                        <img src="{{ asset ('assets-sekolah/images/samples/landing/sma4.png') }}" width="200" height="200" alt="image">
                    </div>
                </div>
            </div>
                    </div>
            <div class="col-md-4 grid-margin stretch-card">
            <div class="card card-item-preview">
                <div class="card-body">
                    <div class="col-md-3 grid-margin">
                        <img src="{{ asset ('assets-sekolah/images/samples/landing/smk3.png') }}" width="200" height="200" alt="image">
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
            <div class="card card-item-preview">
                <div class="card-body">
                    <div class="col-md-3 grid-margin">
                        <img src="{{ asset ('assets-sekolah/images/samples/landing/smp1.jpg') }}" width="200" height="200" alt="image">
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
            <div class="card card-item-preview">
                <div class="card-body">
                    <div class="col-md-3 grid-margin">
                        <img src="{{ asset ('assets-sekolah/images/samples/landing/smp7.png') }}" width="200" height="200" alt="image">
                    </div>
                </div>
            </div>
            </div>

            <div class="col-md-4 grid-margin stretch-card">
                <div class="card card-item-preview">
                    <div class="card-body">
                        <div class="col-md-3 grid-margin">
                            <img src="{{ asset ('assets-sekolah/images/samples/landing/alirsyad.png') }}" width="200" height="200" alt="image">
                        </div>
                    </div>
                </div>
                </div>

                </div>
            </div>
        </div>
    </div>
<!-- page-body-wrapper ends -->
</div>
<footer class="footer">
    <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 <a href="http://evoting-osis.herokuapp.com/" target="_blank">Evoting</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Evoting OSIS<i class="mdi mdi-heart text-danger"></i></span>
    </div>
</footer>
<!-- container-scroller -->
<!-- plugins:js -->
@include('templates.partials.adminhome._script')
</body>

</html>
