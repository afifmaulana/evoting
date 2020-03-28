@extends('templates.adminsekolah')
@section('content')

<div class="row">
    <div class="col-md-4 col-sm-6 grid-margin stretch-card">
        <div class="card text-center">
            <div class="card-body">
                <img src="{{ asset ('assets-sekolah/images/faces/face1.jpg') }}" class="img-lg rounded-circle mb-2" alt="profile image"/>
                <h4>{{Auth::guard('adminsekolah')->user()->nama_admin}}</h4>
                <p class="text-muted">Developer</p>
                <p class="mt-4 card-text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor. Lorem
                </p>
                <button class="btn btn-primary btn-sm mt-3 mb-4">Follow</button>
                <div class="border-top pt-3">
                    <div class="row">
                        <div class="col-4">
                            <h6>5896</h6>
                            <p>Post</p>
                        </div>
                        <div class="col-4">
                            <h6>1596</h6>
                            <p>Followers</p>
                        </div>
                        <div class="col-4">
                            <h6>7896</h6>
                            <p>Likes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ubah Profil</h4>

                <form class="forms-sample" method="POST" action="#">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_admin') is-invalid @enderror"
                               id="exampleInputName1" placeholder="Masukkan Nama Lengkap" name="nama_admin"
                               value="{{ old('nama_admin') }}">
                        @error('nama_admin')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                               id="exampleInputEmail3" placeholder="Masukkan Email" name="email"
                        value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               id="exampleInputPassword4" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Foto">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror"
                                  id="exampleTextarea1" rows="2" name="alamat">

                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

    @endsection