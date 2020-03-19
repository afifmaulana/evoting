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
                            <button type="button" class="btn btn-primary btn-fw"><i class="mdi mdi-plus-box-outline"></i>Primary</button>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>No</th>
                                        <th>Nama Calon</th>
                                        <th>Visi & Misi</th>
                                        <th>Foto</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        {{--{!! $dataCalon->visi !!}--}}
                                        <td>1</td>
                                        <td>Edinburgh</td>
                                        <td>blabla bla </td>
                                        <td>$3200</td>
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
