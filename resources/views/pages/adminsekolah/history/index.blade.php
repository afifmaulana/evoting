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
                                        <th>Nama Calon</th>
                                        <th>Hasil</th>
                                        <th>Actions</th>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection