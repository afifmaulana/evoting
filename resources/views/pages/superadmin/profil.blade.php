@extends('templates.superadmin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Profil</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="{{route('dashboard1.index')}}">
                                    <i class="fas fa-home"></i> Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Profil</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Your content goes here  -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Ubah</strong> Profil</h2>
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

                            <button type="submit" class="btn btn-info btn-round">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection