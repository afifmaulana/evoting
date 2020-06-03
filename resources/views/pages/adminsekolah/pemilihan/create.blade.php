@extends('templates.adminsekolah')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Buat Even Pemilihan</h4>
            <p class="card-description">
                Pemilihan Ketua dan Wakil Osis
            </p>
            <form class="forms-sample" method="POST" action="{{route('pemilihan.store')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Sekolah</label>
                    <input type="text" class="form-control" id="exampleInputName1"
                           value="{{Auth::guard('adminsekolah')->user()->nama_admin}}"
                           name="id_adminsekolah" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputEmail3"
                           name="tanggal" placeholder="Tanggal">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Waktu Mulai</label>
                    <input type="time" class="form-control" id="exampleInputPassword4"
                           name="waktu_mulai" placeholder="Waktu Mulai">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Waktu Selesai</label>
                    <input type="time" class="form-control" id="exampleInputPassword4"
                           name="waktu_selesai" placeholder="Waktu Selesai">
                </div>
                <div class="form-group">
                    <label for="exampleInputCity1">Tahun Ajaran</label>
                    <input type="text" class="form-control" id="exampleInputCity1"
                           name="tahun_ajaran" placeholder="Tahun Ajaran">
                </div>

                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>

    @endsection