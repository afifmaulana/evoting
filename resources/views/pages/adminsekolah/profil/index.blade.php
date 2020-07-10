@extends('templates.adminsekolah')
@section('content')

<div class="row">
    <div class="col-md-4 col-sm-6 grid-margin stretch-card">
        <div class="card text-center">
            <div class="card-body">
                <img src="{{asset(Auth::guard('adminsekolah')->user()->foto)}}" class="img-lg rounded-circle mb-2" alt="profile image"/>
                <h4>{{Auth::guard('adminsekolah')->user()->nama_admin}}</h4>
                <p class="text-muted">Admin Sekolah</p>

                <div class="border-top pt-3">

                    <div class="row">
                        <div class="col-md-6">
                            <label>Nama Admin</label>
                            <label>Nama Sekolah</label>
                            <label>Email</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{Auth::guard('adminsekolah')->user()->nama_admin}}</p>
                            <p>{{Auth::guard('adminsekolah')->user()->nama_sekolah}}</p>
                            <p>{{Auth::guard('adminsekolah')->user()->email}}</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ubah Profil</h4>

                <form class="forms-sample" method="POST" action="{{route('profilsekolah.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Nama Lengkap</label>
                        <input type="text" class="form-control {{$errors->has('nama_admin')?'is-invalid':''}}"
                               id="exampleInputName1" placeholder="Masukkan Nama Lengkap" name="nama_admin"
                               value="{{Auth::guard('adminsekolah')->user()->nama_admin}}">
                        @error('nama_admin')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Nama Sekolah</label>
                        <input type="text" class="form-control {{$errors->has('nama_sekolah')?'is-invalid':''}}"
                               id="exampleInputName1" placeholder="Masukkan Nama Lengkap" name="nama_sekolah"
                               value="{{Auth::guard('adminsekolah')->user()->nama_sekolah}}">
                        @error('nama_sekolah')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" class="form-control" readonly value="{{Auth::guard('adminsekolah')->user()->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder="*********" name="password">
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="hidden" name="old_foto" value="{{Auth::guard('adminsekolah')->user()->foto}}"/>
                        <input class="form-control {{$errors->has('foto')?'is-invalid':''}}"
                               type="file" name="foto" onchange="loadfile(event)">
                        @error('foto')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <img id="output" class="img-fluid" height="100" width="100"
                             src="{{asset(Auth::guard('adminsekolah')->user()->foto)}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror"
                               id="exampleTextarea1" rows="2" name="nip" value="{{Auth::guard('adminsekolah')->user()->nip}}"
                        placeholder="Masukkan NIP Anda">
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">No HP</label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                               id="exampleTextarea1" rows="2" name="no_hp" value="{{Auth::guard('adminsekolah')->user()->no_hp}}"
                        placeholder="Masukkan No HP Anda">
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">No Izin</label>
                        <input type="text" class="form-control @error('no_izin') is-invalid @enderror"
                               id="exampleTextarea1" rows="2" name="no_izin" value="{{Auth::guard('adminsekolah')->user()->no_izin}}"
                        placeholder="Masukkan No Izin">
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror"
                                  id="exampleTextarea1" rows="2" name="alamat"
                        placeholder="Masukkan Alamat Sekolah">{{Auth::guard('adminsekolah')->user()->alamat}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

    @endsection