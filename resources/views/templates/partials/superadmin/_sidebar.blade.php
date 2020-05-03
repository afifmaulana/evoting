<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="sidebar-user-panel active">
                <div class="user-panel">
                    <div class=" image">
                        <img src="{{ asset ('assets/images/usrbig.jpg') }}" class="img-circle user-img-circle" alt="User Image" />
                    </div>
                </div>
                <div class="profile-usertitle">
                    <div class="sidebar-userpic-name"> Emily Smith </div>
                    <div class="profile-usertitle-job ">Manager </div>
                </div>
            </li>
            <li>
                <a href="{{route('dashboard1.index')}}">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Users</span>
                </a>
                <ul class="ml-menu">
                    <li class="active">
                        <a href="{{route('users.index')}}">Belum dikonfirmasi</a>
                    </li>
                    <li class="active">
                        <a href="{{route('users.create')}}">Sudah dikonfirmasi</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route ('sekolah.index') }}">
                    <i class="fa fa-university"></i>
                    <span>Data Sekolah</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>