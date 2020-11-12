@extends('templates.adminsekolah')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">

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


                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Atur Pemilihan</h4>
                        <div class="button">
                            @if($tahun != \Carbon\Carbon::now()->year)
                                <a href="{{route('pemilihan.create')}}">
                                    <button type="button" class="btn btn-primary btn-fw"><i
                                                class="mdi mdi-plus-box-outline"></i>Buat
                                    </button>
                                </a>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->tanggal}}</td>
                                            <td>{{$data->waktu_mulai}}</td>
                                            <td>{{$data->waktu_selesai}}</td>
                                            <td>{{$data->tahun_ajaran}}</td>

                                            <td class="text-right">
                                                <button class="btn btn-light">
                                                    <i class="mdi mdi-eye text-primary"></i>
                                                </button>
                                                <a href="#">
                                                    <button class="btn btn-warning">
                                                        <i class="icon-note"></i>
                                                    </button>
                                                </a>
                                                <a href="{{route('pemilihan.destroy', $data->id)}}">
                                                <button class="btn btn-danger">
                                                    <i class="icon-trash"></i>
                                                </button>
                                                </a>
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
