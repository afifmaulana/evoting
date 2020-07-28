<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="sidebar-user-panel active">
                <div class="user-panel">
                    <div class=" image">
                        <img src="{{asset('uploads/superadmin/'.Auth::guard('superadmin')->user()->path_avatar)}}" class="img-circle user-img-circle" alt="User Image" />
                    </div>
                </div>
                <div class="profile-usertitle">
                    <div class="sidebar-userpic-name"> {{Auth::guard('superadmin')->user()->name}} </div>
                    <div class="profile-usertitle-job ">Admin </div>
                </div>
            </li>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{route('dashboard1.index')}}">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->is('datausers') ? 'active' : '' }}">
                <a href="{{route('users.index')}}">
                    <i class="fas fa-users"></i>
                    <span>Data Users</span>
                </a>

            </li>
            <li class="{{ request()->is('datasekolah') ? 'active' : '' }}">
                <a href="{{ route ('sekolah.index') }}">
                    <i class="fa fa-university"></i>
                    <span>Data Sekolah</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>