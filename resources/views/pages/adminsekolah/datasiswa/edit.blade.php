@extends('templates.adminsekolah')
@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ubah Data Siswa</h4>

                <form class="forms-sample" method="POST" action="{{route('datasiswa.update', $data->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">NIS</label>
                        <input type="text" class="form-control {{$errors->has('nis')?'is-invalid':''}}"
                               id="exampleInputName1" placeholder="Masukkan Nama Lengkap" name="nis"
                               value="{{$data->nis}}">
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
                             src="{{asset('uploads/adminsekolah/'.Auth::guard('adminsekolah')->user()->foto)}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror"
                                  id="exampleTextarea1" rows="2" name="alamat">{{Auth::guard('adminsekolah')->user()->alamat}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

    @endsection