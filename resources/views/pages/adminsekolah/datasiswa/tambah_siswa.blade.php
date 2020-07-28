@extends('templates.adminsekolah')
@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Siswa</h4>

                <form class="forms-sample" method="POST" action="{{route('tambah.siswa')}}">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputName1">NIS </label>
                        <input type="text" class="form-control {{$errors->has('nama_siswa')?'is-invalid':''}}"
                               id="exampleInputName1" placeholder="Masukkan NIS Siswa" name="nis">
                        @if ($errors->has('nis'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('nis') }}</b></p>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Nama Lengkap</label>
                        <input type="text" class="form-control {{$errors->has('nama_siswa')?'is-invalid':''}}"
                               id="exampleInputName1" placeholder="Masukkan Nama Lengkap" name="nama_siswa">
                        @if ($errors->has('nama_siswa'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('nama_siswa') }}</b></p>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="email" class="form-control {{$errors->has('email')?'is-invalid':''}}"
                        placeholder="Masukkan Email" name="email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('email') }}</b></p>
                            </span>
                        @endif

                    </div>


                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

    @endsection