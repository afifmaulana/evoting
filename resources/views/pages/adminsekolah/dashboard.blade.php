@extends('templates.adminsekolah')
@section('content')

    <div class="row">
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Data Siswa</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-flex">
                                <h2 class="mb-0">10</h2>
                                <div class="d-flex align-items-center ml-2">
                                    <i class="mdi mdi-clock text-muted"></i>
                                    <small class=" ml-1 mb-0">Updated: 9:10am</small>
                                </div>
                            </div>
                            <small class="text-gray">Data Siswa yang telah ditambahkan</small>
                        </div>
                        <div class="d-inline-block">
                            <div class="bg-success px-4 py-2 rounded">
                                <i class="mdi mdi-account-card-details text-white icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Data Calon</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-flex">
                                <h2 class="mb-0">2</h2>
                                <div class="d-flex align-items-center ml-2">
                                    <i class="mdi mdi-clock text-muted"></i>
                                    <small class=" ml-1 mb-0">Updated: 05:42pm</small>
                                </div>
                            </div>
                            <small class="text-gray">hey, let’s have lunch together</small>
                        </div>
                        <div class="d-inline-block">
                            <div class="bg-warning px-4 py-2 rounded">
                                <i class="mdi mdi-account-card-details text-white icon-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection