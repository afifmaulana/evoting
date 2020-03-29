@extends('templates.adminsekolah')
@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Calon</h4>
                <form class="forms-sample" method="post" action="{{route('datacalon.update', $data->id)}}"
                      enctype="multipart/form-data">
                    @csrf
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label>Nama Calon</label>
                        <select class="js-example-basic-single" style="width:100%" name="nama_siswa">
                            <option value="{{$data->siswa->nama_siswa}}">{{$data->siswa->nama_siswa}}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>File upload</label>
                        <input type="hidden" name="old_foto" class="dropify"/>
                        <input class="form-control {{$errors->has('foto')?'is-invalid':''}}"
                               type="file" name="foto" onchange="loadfile(event)" id="foto">
                        <img id="output" class="img-fluid" height="100" width="100"
                             src="{{asset('uploads/adminsekolah/'.$data->foto)}}">
                    </div>


                    <div class="form-group">
                        <label>Visi</label>
                        <textarea id="summernoteExample" name="visi">
                        </textarea>

                    </div>

                    <div class="form-group">
                        <label>Misi</label>
                        <textarea id="summernoteExample2" name="misi">
                        </textarea>

                    </div>

                    <button type="submit" class="btn btn-success mr-2">Tambah</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

@endsection