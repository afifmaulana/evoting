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
                <li class="dropdown">
                    <a href="#" onclick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                        <i class="far fa-bell"></i>
                        <span id="count" class="bg-orange"></span>
                    </a>
                    <ul class="dropdown-menu pullDow">
                        <li class="header">Notifikasi</li>
                        <li class="body">
                            <ul id="notify"></ul>
                        </li>
                        <li class="footer">
                            <a href="#" onclick="return false;">Lihat Semua</a>
                        </li>
                    </ul>
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
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    const url = "{{ config('app.url') }}";
    const count = document.querySelector('#count');
    const nonify = document.querySelector('#notify');
    const pusher = new Pusher('12f76077b696fd636928', {
      cluster: 'ap1',
      encrypted: true
    });

    const channel = pusher.subscribe('admin-notification');
    channel.bind('App\\Events\\AdminNotification', function(data) {
      getData();
    });

    function getData(){
        fetch(url+'/superadmin/notification')
        .then(res => res.json())
        .then(res => {
        const status = res.filter(r => !r.status);
        if(status.length > 0){
            count.classList.add('label-count')
        }
        let li = ``;
        res.map(r => {
            li += showData(r);
        })

        notify.innerHTML = li;

        });
    }

    getData();

    function showData(r){
        return `
            <li class="text-center mb-2 mt-3">
                <button class="btn btn-primary btn-large" onclick="window.location='users'">${r.pesan}</button>
            </li>
            `
    }

</script>
