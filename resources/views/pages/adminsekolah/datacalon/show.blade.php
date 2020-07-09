@extends('templates.adminsekolah')
@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">CALON 1</h4>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid rounded" src="{{$data->foto}}" alt="tab preview" width="200px" height="200px">
                    </div>
                    <div class="col-md-6 pl-md-5 pt-4 pt-md-0">
                        <h5 class="mb-4 pb-3">BIO DATA CALON</h5>
                        <ul class="nav nav-tabs tab-basic" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#visi" role="tab" aria-controls="visi" aria-selected="true">VISI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#misi" role="tab" aria-controls="misi" aria-selected="false">MISI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#profil" role="tab" aria-controls="profil" aria-selected="false">PROFIL</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="visi" role="tabpanel" aria-labelledby="home-tab">
                                {!! $data->visi !!}
                            </div>
                            <div class="tab-pane fade" id="misi" role="tabpanel" aria-labelledby="profile-tab">
                                {!! $data->misi !!}
                            </div>
                            <div class="tab-pane fade" id="profil" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Calon</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$data->ketua->nama_siswa}}</p>
                                        <p>{{$data->wakil->nama_siswa}}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection