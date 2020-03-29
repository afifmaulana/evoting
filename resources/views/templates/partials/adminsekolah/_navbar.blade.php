<div class="container d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top">
        <a class="navbar-brand brand-logo" href="#"><img src="{{ asset ('assets-sekolah/images/evoting-logo.png') }}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex d-flex flex-row-reverse">
        <ul class="navbar-nav navbar-nav-right mr-0 ">
            <li>
                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">{{Auth::guard('adminsekolah')->user()->nama_admin}}</h6>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{asset('uploads/adminsekolah/'.Auth::guard('adminsekolah')->user()->foto)}}" alt="Profile image">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">

                    <a href="{{route('profilsekolah.index')}}" class="dropdown-item mt-2">
                        Profil
                    </a>
                    <a href="{{route('adminsekolah.logout')}}" class="dropdown-item">
                        Keluar
                    </a>
                </div>
            </li>

        </ul>
        <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</div>