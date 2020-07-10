@extends('templates.superadmin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Profile</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Extra</a>
                            </li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Your content goes here  -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="m-b-20">
                            <div class="contact-grid">
                                <div class="profile-header bg-dark">
                                    <div class="user-name">{{Auth::guard('superadmin')->user()->name}}</div>
                                    <div class="name-center">Super Admin</div>
                                </div>
                                <img src="{{asset(Auth::guard('superadmin')->user()->path_avatar)}}" class="user-img" alt="Profile image">
                                <p>
                                    456, Estern evenue, Courtage area,
                                    <br />New York
                                </p>
                                <div>
                                    <span class="phone">
                                        <i class="material-icons">phone</i>264-625-2583</span>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <h5>564</h5>
                                        <small>Following</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>18k</h5>
                                        <small>Followers</small>
                                    </div>
                                    <div class="col-4">
                                        <h5>565</h5>
                                        <small>Post</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item m-l-10">
                                <a class="nav-link active" data-toggle="tab" href="#about">About</a>
                            </li>
                            <li class="nav-item m-l-10">
                                <a class="nav-link" data-toggle="tab" href="#skills">Skills</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane body active" id="about">
                                <p class="text-default">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.</p>
                                <small class="text-muted">Email address: </small>
                                <p>john@gmail.com</p>
                                <hr>
                                <small class="text-muted">Phone: </small>
                                <p>+91 1234567890</p>
                                <hr>
                            </div>
                            <div class="tab-pane body" id="skills">
                                <ul class="list-unstyled">
                                    <li>
                                        <div>Photoshop</div>
                                        <div class="progress skill-progress m-t-20">
                                            <div class="progress-bar l-bg-green width-per-45" role="progressbar"
                                                 aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>Wordpress</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-orange width-per-38" role="progressbar"
                                                 aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>HTML 5</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-cyan width-per-39" role="progressbar"
                                                 aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>Angular</div>
                                        <div class="progress skill-progress m-b-20">
                                            <div class="progress-bar l-bg-purple width-per-70" role="progressbar"
                                                 aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="profile-tab-box">
                            <div class="p-l-20">
                                <ul class="nav ">
                                    <li class="nav-item tab-all">
                                        <a class="nav-link active show" href="#project" data-toggle="tab">About Me</a>
                                    </li>
                                    <li class="nav-item tab-all p-l-20">
                                        <a class="nav-link" href="#usersettings" data-toggle="tab">Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>About</h2>
                                        </div>
                                        <div class="body">
                                            <div class="row">
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Full Name</strong>
                                                    <br>
                                                    <p class="text-muted">Emily Smith</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Mobile</strong>
                                                    <br>
                                                    <p class="text-muted">(123) 456 7890</p>
                                                </div>
                                                <div class="col-md-3 col-6 b-r">
                                                    <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted">johndeo@example.com</p>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                    <strong>Location</strong>
                                                    <br>
                                                    <p class="text-muted">India</p>
                                                </div>
                                            </div>
                                            <p class="m-t-30">Completed my graduation in Arts from the well known and
                                                renowned institution
                                                of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was
                                                affiliated
                                                to M.S. University. I ranker in University exams from the same
                                                university
                                                from 1996-01.</p>
                                            <br>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="timeline" aria-expanded="false">
                        </div>
                        <div role="tabpanel" class="tab-pane" id="usersettings" aria-expanded="false">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>Security</strong> Settings</h2>
                                </div>
                                <form class="body" method="POST" action="{{route('profiladmin.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}"
                                               name="name" value="{{Auth::guard('superadmin')->user()->name}}"
                                               placeholder="Masukkan Nama">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               name="email" readonly value="{{Auth::guard('superadmin')->user()->email}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                               placeholder="Masukkan Password Anda" name="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="path_avatar">
                                    </div>

                                    <button type="submit" class="btn btn-info btn-round">Save Changes</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection