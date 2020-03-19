<div class="container d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset ('assets-sekolah/images/logo-inverse.svg') }}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset ('assets-sekolah/images/logo-mini.svg') }}" alt="logo"/></a>
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
                    <img class="img-xs rounded-circle" src="{{ asset ('assets-sekolah/images/faces/face1.jpg') }}" alt="Profile image">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <a class="dropdown-item p-0">
                        <div class="d-flex border-bottom w-100">
                            <div class="py-3 px-4 d-flex align-items-center justify-content-center flex-grow-1"><i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i></div>
                            <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right flex-grow-1"><i class="mdi mdi-account-outline mr-0 text-gray"></i></div>
                            <div class="py-3 px-4 d-flex align-items-center justify-content-center flex-grow-1"><i class="mdi mdi-alarm-check mr-0 text-gray"></i></div>
                        </div>
                    </a>
                    <a href="{{route('profil.index')}}" class="dropdown-item mt-2">
                        Manage Accounts
                    </a>
                    <a class="dropdown-item">
                        Change Password
                    </a>
                    <a class="dropdown-item">
                        Check Inbox
                    </a>
                    <a href="{{route('adminsekolah.logout')}}" class="dropdown-item">
                        Sign Out
                    </a>
                </div>
            </li>

        </ul>
        <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</div>