@extends('templates.adminsekolah')
@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Buat Acara Pemilihan</h4>
                <p class="card-description">
                    Pemilihan Ketua dan Wakil Osis
                </p>
                <form class="forms-sample" method="POST" action="{{route('pemilihan.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Nama Admin</label>
                        <input readonly class="form-control" id="exampleInputName1"
                               value="{{Auth::guard('adminsekolah')->user()->nama_admin}}"
                               name="id_adminsekolah" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail3">Tanggal</label>

                        <input type="text" class="datepicker form-control {{$errors->has('tanggal')?'is-invalid':''}}"
                               name="tanggal" placeholder="Tanggal" value="{{old('tanggal')}}"
                               readonly style="background: white; cursor: pointer">

                        @if ($errors->has('tanggal'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('tanggal') }}</b></p>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Waktu Mulai</label>
                        <input type="time"
                               class="form-control form-control {{$errors->has('waktu_mulai')?'is-invalid':''}}"
                               id="exampleInputPassword4"
                               name="waktu_mulai" placeholder="Waktu Mulai" value="{{old('waktu_mulai')}}">
                        @if ($errors->has('waktu_mulai'))
                            <span class="invalid-feedback" role="alert">
                        <p><b>{{ $errors->first('waktu_mulai') }}</b></p>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Waktu Selesai</label>
                        <input type="time" class="form-control {{$errors->has('waktu_selesai')?'is-invalid':''}}"
                               id="exampleInputPassword4"
                               name="waktu_selesai" placeholder="Waktu Selesai" value="{{old('waktu_selesai')}}">
                        @if ($errors->has('waktu_selesai'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('waktu_selesai') }}</b></p>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Tahun Ajaran</label>
                        <input type="text" class="form-control {{$errors->has('tahun_ajaran')?'is-invalid':''}}"
                               id="exampleInputCity1"
                               name="tahun_ajaran" placeholder="Tahun Ajaran" value="{{old('tahun_ajaran')}}">
                        @if ($errors->has('tahun_ajaran'))
                            <span class="invalid-feedback" role="alert">
                                <p><b>{{ $errors->first('tahun_ajaran') }}</b></p>
                            </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $( ".datepicker").datepicker({
            startDate: new Date()
        });
    </script>
@endsection
