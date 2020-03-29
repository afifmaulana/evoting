@extends('templates.adminsekolah')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Calon</h4>
                        <div class="button">
                            <a href="{{route('datacalon.create')}}">
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
                                        <th>Nama Calon</th>
                                        <th>Foto</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $data)
                                        <tr>
                                            {{--{!! $dataCalon->visi !!}--}}
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->siswa->nama_siswa}}</td>

                                            <td><a class="btn btn-circle" data-toggle="modal"
                                                   data-target="#exampleModal{{$loop->iteration}}" type="button">
                                                    <img src="{{asset('uploads/adminsekolah/'.$data->foto)}}"
                                                         style="height: 50px; width: 50px;">
                                                </a></td>

                                            <td>
                                                <label class="badge badge-info">On hold</label>
                                            </td>
                                            <td class="text-right">
                                                <button class="btn btn-light">
                                                    <i class="mdi mdi-eye text-primary"></i>
                                                </button>
                                                <a href="{{route('datacalon.edit', $data-> id)}}">
                                                    <button class="btn btn-warning">
                                                        <i class="icon-note"></i>
                                                    </button>
                                                </a>
                                                <a href="{{route('datacalon.destroy', $data->id)}}">
                                                    <button class="btn btn-danger">
                                                        <i class="icon-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1"
                                             role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Images</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex justify-content-center">
                                                            <img src="{{asset('uploads/adminsekolah/'.$data->foto)}}"
                                                                 style="height: 80px; width: 80px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
