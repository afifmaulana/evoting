@extends('templates.adminsekolah')
@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Atur Pemilihan</h4>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>No</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Nama Calon 1</th>
                                        <th>Hasil</th>
                                        <th>Nama Calon 2</th>
                                        <th>Hasil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->tahun_ajaran}}</td>
                                            @foreach($data->hasils as $hasil)
                                                <td>
                                                    <p>{{$hasil->calon->ketua->nama_siswa}}</p>
                                                <td>{{$hasil->total}}</td>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('export.history') }}">
                                <button class="btn btn-success">Cetak History Pemilihan | <i class="icon-printer"></i></button>
                            </a>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
