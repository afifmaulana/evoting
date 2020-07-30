<!DOCTYPE html>
<html lang="en">

@include('templates.partials.adminhome._head')

<body>
<div class="container-scroller landing-page">
    <div class="container-fluid top-banner">
        @include('templates.partials.adminhome._navbar')
        <div class="row top-banner-content">
            <div class="col-md-8 mx-auto">
                <div class="row">
                    <div class="col-lg-7">
                        <h1> Aplikasi E-Voting Osis
                        </h1>
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
                                <img src="#" alt="image"
                                     class="card-icon"/>
                                <h4>Features</h4>
                                <p class="card-text">
                                    Mempermudah users menggunakan Aplikasi ini
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card card-icon-top">
                            <div class="card-body">
                                <img src="#" alt="image"
                                     class="card-icon"/>
                                <h4>Support</h4>
                                <p class="card-text">
                                    Mempermudah dalam proses pemilihan ketua dan wakil OSIS terutama dalam perhitungan suara
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card card-icon-top">
                            <div class="card-body">
                                <img src="#" alt="image"
                                     class="card-icon"/>
                                <h4>Biaya</h4>
                                <p class="card-text">
                                    Mengurangi biaya yang dikeluarkan oleh sekolah
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="container-fluid features-section">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 mx-auto">--}}
                {{--<div class="row mb-5">--}}
                    {{--<div class="col-md-8 mx-auto">--}}
                        {{--<h3>Built for everyone</h3>--}}
                        {{--<h6>--}}
                            {{--Shure’s Music Phone Adapter (MPA) is our favorite iPhone solution, since it lets you use the--}}
                            {{--headphones you’re most comfortable with.--}}
                        {{--</h6>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-3 grid-margin">--}}
                        {{--<img class="card-img-top"--}}
                             {{--src="{{ asset ('assets-sekolah/images/samples/landing/landing-1.png') }}" alt="image">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 grid-margin">--}}
                        {{--<img class="card-img-top"--}}
                             {{--src="{{ asset ('assets-sekolah/images/samples/landing/landing-2.png') }}" alt="image">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 grid-margin">--}}
                        {{--<img class="card-img-top"--}}
                             {{--src="{{ asset ('assets-sekolah/images/samples/landing/landing-3.png') }}" alt="image">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 grid-margin">--}}
                        {{--<img class="card-img-top"--}}
                             {{--src="{{ asset ('assets-sekolah/images/samples/landing/landing-4.png') }}" alt="image">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 grid-margin">--}}
                        {{--<img class="card-img-top"--}}
                             {{--src="{{ asset ('assets-sekolah/images/samples/landing/landing-5.png') }}" alt="image">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 grid-margin">--}}
                        {{--<img class="card-img-top"--}}
                             {{--src="{{ asset ('assets-sekolah/images/samples/landing/landing-6.png') }}" alt="image">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 grid-margin">--}}
                        {{--<img class="card-img-top"--}}
                             {{--src="{{ asset ('assets-sekolah/images/samples/landing/landing-7.png') }}" alt="image">--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 grid-margin">--}}
                        {{--<img class="card-img-top"--}}
                             {{--src="{{ asset ('assets-sekolah/images/samples/landing/landing-8.png') }}" alt="image">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('templates.partials.adminhome._script')
</body>

</html>
