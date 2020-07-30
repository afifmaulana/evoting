@extends('templates.adminsekolah')
@section('content')

    <div class="row">
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Data Siswa</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-flex">
                                <h2 class="mb-0">{{ $siswa }}</h2>

                            </div>
                            <small class="text-gray">Data Siswa yang telah ditambahkan</small>
                        </div>
                        <div class="d-inline-block">
                            <div class="bg-success px-4 py-2 rounded">
                                <i class="mdi mdi-account-card-details text-white icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Data Calon</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-flex">
                                <h2 class="mb-0">{{ $calon }}</h2>

                            </div>
                            <small class="text-gray">Data Calon yang telah ditambahkan</small>
                        </div>
                        <div class="d-inline-block">
                            <div class="bg-warning px-4 py-2 rounded">
                                <i class="mdi mdi-account-card-details text-white icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($hasils as $hasil)
            <div class="col-md-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0">Calon {{ $loop->iteration }}</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p><label>Nama Ketua</label></p>
                                <p><label>Nama Wakil</label></p>
                                <p><label>Total</label></p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $hasil->calon->ketua->nama_siswa }}</p>
                                <p>{{ $hasil->calon->wakil->nama_siswa }}</p>
                                <p>{{ $hasil->total }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection