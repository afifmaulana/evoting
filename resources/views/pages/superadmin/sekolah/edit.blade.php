@extends('templates.superadmin')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Edit Data Sekolah</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Data Sekolah</a>
                            </li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Data Sekolah</h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{route('sekolah.update', $data->id)}}">
                                @csrf
                                {{method_field('PATCH')}}
                                <div class="form-group form-float">
                                    <label class="form-label">NAMA SEKOLAH</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control {{$errors->has('nama_sekolah')?'is-invalid':''}}"
                                               name="nama_sekolah" required placeholder="Masukkan Nama Sekolah"
                                               value="{{$data->nama_sekolah}}">
                                        @if ($errors->has('nama_sekolah'))
                                            <span class="invalid-feedback" role="alert">
                                                        <p><b>{{ $errors->first('nama_sekolah') }}</b></p>
                                                    </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Sekolah</label>
                                    <select name="kategori" class="custom-select mb-3">
                                        <option value="SMP" @if($data->kategori=='SMP'){{ "selected" }} @endif>SMP/MTS</option>
                                        <option value="SMA" @if($data->kategori=='SMA'){{ "selected" }} @endif>SMA/SMK</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection