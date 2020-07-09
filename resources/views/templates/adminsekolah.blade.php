<!DOCTYPE html>
<html lang="en">

@include('templates.partials.adminsekolah._head')

<body>
<div class="container-scroller">

    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
        @include('templates.partials.adminsekolah._navbar')
        @include('templates.partials.adminsekolah._navbottom')
    </nav>


    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>

            {{--@include('templates.partials.adminsekolah._footer')--}}
        </div>
        <div class="footer">
            <p>Footer</p>
        </div>


    </div>

</div>

@include('templates.partials.adminsekolah._script')
</body>
</html>
