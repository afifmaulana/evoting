@extends('templates.adminsekolah')
@section('content')

    <div class="col-md-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                @if($errors->any())
                    <h4>{{$errors->first()}}</h4>
                @endif
                <h4 class="card-title">Tambah Calon</h4>
                <form class="forms-sample" method="post" action="{{route('datacalon.store')}}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Calon</label>
                        <select class="js-example-basic-multiple form-control {{$errors->has('name')?'is-invalid':''}}"
                                multiple="multiple" style="width:100%" name="name[]" id="name">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('name') }}</b></p>
                                </span>
                            @endif
                            @foreach($datas as $data)
                                <option value="{{$data->id}}">{{$data->nama_siswa}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{--<div class="form-group">
                        <label for="exampleInputName1">Nama Calon</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Ketua dan Wakil Osis" name="name">
                    </div>--}}

                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="foto" class="dropify {{$errors->has('foto')?'is-invalid':''}}"/>
                        @if ($errors->has('foto'))
                            <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('foto') }}</b></p>
                                </span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label>Visi</label>
                        <textarea id="summernoteExample" name="visi"
                                  class="form-control {{$errors->has('visi')?'is-invalid':''}}">
                         @if ($errors->has('visi'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('visi') }}</b></p>
                                </span>
                            @endif
                        </textarea>

                    </div>

                    <div class="form-group">
                        <label>Misi</label>
                        <textarea id="summernoteExample2" name="misi"
                                  class="form-control {{$errors->has('misi')?'is-invalid':''}}">
                         @if ($errors->has('misi'))
                                <span class="invalid-feedback" role="alert">
                                    <p><b>{{ $errors->first('misi') }}</b></p>
                                </span>
                            @endif
                        </textarea>

                    </div>

                    <button type="submit" class="btn btn-success mr-2">Tambah</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $("#name").select2({
            maximumSelectionLength: 2
        });
    </script>
@endsection