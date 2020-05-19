@extends('templates.adminsekolah')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pemilihan</h4>
                        <div class="button">
                            <a href="{{route('pemilihan.create')}}">
                                <button type="button" class="btn btn-primary btn-fw"><i
                                            class="mdi mdi-plus-box-outline"></i>Tambah
                                </button>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>No</th>
                                        <th>Sekolah</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>Edinburgh</td>
                                        <td>{{$data->tanggal}}</td>
                                        <td>{{$data->waktu}}</td>
                                        <td>{{$data->tahun_ajaran}}</td>
                                        <td>
                                            <label class="badge badge-info">On hold</label>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-light">
                                                <i class="mdi mdi-eye text-primary"></i>View
                                            </button>
                                            <button class="btn btn-light">
                                                <i class="mdi mdi-close text-danger"></i>Remove
                                            </button>
                                        </td>
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
