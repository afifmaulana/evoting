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
                            {{--<a href="{{route('datasiswa.create')}}">
                                <button type="button" class="btn btn-primary btn-fw"><i
                                            class="mdi mdi-plus-box-outline"></i>Primary
                                </button>
                            </a>--}}

                            <form action="{{ route('datasiswa.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" accept=".csv">
                                <button class="btn btn-success">Import User Data</button>
                            </form>
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
                                            <td>{{$data->adminsekolah->nama_sekolah}}</td>

                                            <td class="text-right">
                                                <button class="btn btn-light">
                                                    <i class="mdi mdi-eye text-primary"></i>
                                                </button>
                                                <button class="btn btn-warning">
                                                    <i class="icon-note"></i>
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i class="icon-trash"></i>
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