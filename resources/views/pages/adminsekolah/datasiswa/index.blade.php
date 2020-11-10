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
                            <div class="button">
                                {{--<a href="{{route('form.siswa')}}">--}}
                                    {{--<button type="button" class="btn btn-primary btn-fw"><i--}}
                                                {{--class="mdi mdi-plus-box-outline"></i>Tambah--}}
                                    {{--</button>--}}
                                {{--</a>--}}

                                
                            <form action="{{ route('datasiswa.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" accept=".csv">
                                <button class="btn btn-success">Import file CSV</button>
                            </form>

                        </div>
                        @if (isset($errors) &&  $errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }}
                            @endforeach
                        </div>
                        @endif


                        {{-- @if (session()->has('failures'))
                        <table class="table table-danger">
                            <tr>
                                <th>Row</th>
                                <th>Attribute</th>
                                <th>Errors</th>
                                <th>Value</th>
                            </tr>

                            @foreach (session()->get('failures') as $validation)
                            <tr>
                                <td>{{ $validation->row() }}</td>
                                <td>{{ $validation->attribute() }}</td>
                                <td>
                                    <ul>
                                        @foreach ($validation->errors() as $e)
                                        <li>{{ $e }}</li>

                                        @endforeach
                                    </ul>
                                </td>
                                {{ $validation->values()[$validation->attribute()] }}
                            </tr>
                            @endforeach
                        </table>

                        @endif --}}

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

                                            <td class="text-right">
                                                <button class="btn btn-light">
                                                    <i class="mdi mdi-eye text-primary"></i>
                                                </button>
                                                <a href="{{route('datasiswa.edit', $data->id)}}">
                                                <button class="btn btn-warning">
                                                    <i class="icon-note"></i>
                                                </button>
                                                </a>
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
