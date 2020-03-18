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
                            <img src="{{ asset ('assets-sekolah/images/samples/landing/mac.png') }}" alt="image"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid middle-section bg-white">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h3 class="mb-5">Why Use External It Support</h3>
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card card-icon-top">
                            <div class="card-body">
                                <img src="{{ asset ('assets-sekolah/images/samples/landing/trophy.png') }}" alt="image"
                                     class="card-icon"/>
                                <h4>Features</h4>
                                <p class="card-text">
                                    Shure’s Music Phone Adapter (MPA) is our favorite iPhone solution, since it lets you
                                    use the headphones you’re most comfortable with
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card card-icon-top">
                            <div class="card-body">
                                <img src="{{ asset ('assets-sekolah/images/samples/landing/support.png') }}" alt="image"
                                     class="card-icon"/>
                                <h4>Support</h4>
                                <p class="card-text">
                                    We connected the adapter to the Shure SE110 in-ear headphones, whose cabling is
                                    modular; the top half is fairly short
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card card-icon-top">
                            <div class="card-body">
                                <img src="{{ asset ('assets-sekolah/images/samples/landing/youtube.png') }}" alt="image"
                                     class="card-icon"/>
                                <h4>Video tutorials</h4>
                                <p class="card-text">
                                    Shure’s coated memory-foam tips are the most comfortable on the market, and they
                                    stay in your ear securely–especially if you wear the cables over the tops of your
                                    ears
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid features-section">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="row mb-5">
                    <div class="col-md-8 mx-auto">
                        <h3>Built for everyone</h3>
                        <h6>
                            Shure’s Music Phone Adapter (MPA) is our favorite iPhone solution, since it lets you use the
                            headphones you’re most comfortable with.
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 grid-margin">
                        <img class="card-img-top"
                             src="{{ asset ('assets-sekolah/images/samples/landing/landing-1.png') }}" alt="image">
                    </div>
                    <div class="col-md-3 grid-margin">
                        <img class="card-img-top"
                             src="{{ asset ('assets-sekolah/images/samples/landing/landing-2.png') }}" alt="image">
                    </div>
                    <div class="col-md-3 grid-margin">
                        <img class="card-img-top"
                             src="{{ asset ('assets-sekolah/images/samples/landing/landing-3.png') }}" alt="image">
                    </div>
                    <div class="col-md-3 grid-margin">
                        <img class="card-img-top"
                             src="{{ asset ('assets-sekolah/images/samples/landing/landing-4.png') }}" alt="image">
                    </div>
                    <div class="col-md-3 grid-margin">
                        <img class="card-img-top"
                             src="{{ asset ('assets-sekolah/images/samples/landing/landing-5.png') }}" alt="image">
                    </div>
                    <div class="col-md-3 grid-margin">
                        <img class="card-img-top"
                             src="{{ asset ('assets-sekolah/images/samples/landing/landing-6.png') }}" alt="image">
                    </div>
                    <div class="col-md-3 grid-margin">
                        <img class="card-img-top"
                             src="{{ asset ('assets-sekolah/images/samples/landing/landing-7.png') }}" alt="image">
                    </div>
                    <div class="col-md-3 grid-margin">
                        <img class="card-img-top"
                             src="{{ asset ('assets-sekolah/images/samples/landing/landing-8.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid newsletter-section">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="d-lg-flex justify-content-between">
                    <h3 class="text-white">Subscribe to our newsletter</h3>
                    <input type="email" class="form-control my-2 my-lg-0" placeholder="Enter your email address"/>
                    <button class="btn btn-light">Subscribe now</button>
                </div>
            </div>
        </div>
    </div>
@include('templates.partials.adminhome._footer')
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('templates.partials.adminhome._script')
</body>

</html>
