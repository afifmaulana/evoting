<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
               aria-expanded="false"></a>
            <a href="#" onClick="return false;" class="bars"></a>
            <a class="navbar-brand" href="">
                <img src="{{ asset ('assets/images/logo.png') }}" alt="" />
                <span class="logo-name">Admin</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="pull-left">
                <li>
                    <a href="#" onClick="return false;" class="sidemenu-collapse">
                        <i class="material-icons">reorder</i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Full Screen Button -->
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i class="fas fa-expand"></i>
                    </a>
                </li>
                <!-- #END# Full Screen Button -->

                <li class="dropdown user_profile">
                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <img src="{{asset('uploads/superadmin/'.Auth::guard('superadmin')->user()->path_avatar)}}" width="32" height="32" alt="User">
                    </a>
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
                                    <a href="{{route('profiladmin.index')}}">
                                        <i class="material-icons">person</i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('superadmin.logout')}}">
                                        <i class="material-icons">power_settings_new</i>Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="pull-right">
                    <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">

                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>