@extends('templates.adminsekolah')
@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Calon</h4>
                <form class="forms-sample" method="post" action="{{route('datacalon.store')}}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Calon</label>
                        <select class="js-example-basic-multiple" multiple="multiple" style="width:100%" name="name">
                            @foreach($datas as $data)
                                <option value="{{$data->nama_siswa}}">{{$data->nama_siswa}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{--<div class="form-group">
                        <label for="exampleInputName1">Nama Calon</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Ketua dan Wakil Osis" name="name">
                    </div>--}}

                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="foto" class="dropify"/>
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