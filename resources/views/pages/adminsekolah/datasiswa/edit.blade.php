@extends('templates.adminsekolah')
@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ubah Data Siswa</h4>

                <form class="forms-sample" method="PATCH" action="{{route('datasiswa.update', $data->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">NIS</label>
                        <input type="text" class="form-control {{$errors->has('nis')?'is-invalid':''}}"
                               id="exampleInputName1" placeholder="Masukkan Nis" name="nis"
                               value="{{$data->nis}}">
                        @error('nis')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="exampleInputName1">Nama Siswa</label>
                        <input type="text" class="form-control {{$errors->has('nama_siswa')?'is-invalid':''}}"
                               id="exampleInputName1" placeholder="Masukkan Nama Siswa" name="nama_siswa"
                               value="{{$data->nama_siswa}}">
                        @error('nama_siswa')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Kelas</label>
                        <input type="text" class="form-control {{$errors->has('kelas')?'is-invalid':''}}"
                               id="exampleInputName1" placeholder="Masukkan Nama Kelas" name="kelas"
                               value="{{$data->kelas}}">
                        @error('kelas')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" class="form-control" readonly value="{{Auth::guard('adminsekolah')->user()->email}}">
                    </div>

                    <button type="submit" class="btn btn-success mr-2">Ubah</button>
                </form>
            </div>
        </div>
    </div>

    @endsection
