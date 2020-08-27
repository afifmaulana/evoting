@extends('templates.superadmin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Data Users</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="#">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Data Admin Sekolah</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #START# Table With State Save -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                 Data Admin Sekolah</h2>
                            {{--<ul class="header-dropdown m-r--5">--}}
                                {{--<div class="btn-group m-l-15">--}}
                                    {{--<button id="addRow" class="btn btn-info">--}}
                                        {{--Add New--}}
                                        {{--<i class="fa fa-plus"></i>--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</ul>--}}
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover save-stage dataTable"
                                       style="width:100%;">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Admin</th>
                                        <th>Nama Sekolah</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->nama_admin}}</td>
                                        <td>{{$data->nama_sekolah}}</td>
                                        <td>{{$data->email}}</td>
                                        <td class="text-right">
                                            <a href="{{route('users.update', $data->id)}}">
                                                <button class="btn-warning">
                                                <i class="fa fa-check-circle"></i>
                                                </button>
                                            </a>
                                            <a href="{{route('users.destroy', $data->id)}}">
                                                <button class="btn-danger">
                                                <i class="fa fa-window-close btn-danger"></i>
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
            <!-- #END# Table With State Save -->
        </div>
    </section>
@endsection
