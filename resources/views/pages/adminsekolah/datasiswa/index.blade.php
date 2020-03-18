@extends('templates.adminsekolah')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Siswa</h4>
                        <div class="button-right">
                        <button type="button" class="btn btn-primary btn-fw"><i class="mdi mdi-plus-box-outline"></i>Primary</button>
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr class="bg-light">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Kelas</th>
                                        <th>Sekolah</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Edinburgh</td>
                                        <td>edin@gmail.com</td>
                                        <td>tkj 2</td>
                                        <td>SMP 2</td>
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