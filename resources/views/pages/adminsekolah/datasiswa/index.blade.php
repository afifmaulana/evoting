@extends('templates.adminsekolah')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if($message = Session::get('create'))
                        <div class="alert alert-success alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{$message}}
                        </div>
                    @endif

                    @if($message = Session::get('update'))
                        <div class="alert alert-success alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{$message}}
                        </div>
                    @endif

                    @if($message = Session::get('delete'))
                        <div class="alert alert-success alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{$message}}
                        </div>
                    @endif
                    <div class="card-body">
                        <h4 class="card-title">Data Siswa</h4>
                        <div class="button-right">
                            <button type="button" class="btn btn-primary btn-fw"><i
                                        class="mdi mdi-plus-box-outline"></i>Primary
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Kelas</th>
                                        <th>Sekolah</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->nis}}</td>
                                            <td>{{$data->nama_siswa}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->kelas}}</td>
                                            <td>{{$data->id_adminsekolah}}</td>
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