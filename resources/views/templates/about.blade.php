<!DOCTYPE html>
<html lang="en">

@include('templates.partials.adminhome._head')

<body>
<div id="home" class="container-scroller landing-page">
    <div class="container-fluid top-banner">
        @include('templates.partials.adminhome._navbar')

    </div>

    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>About</span></li>
              </ol>
            <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">Aplikasi E-Voting OSIS</h1>
            <div class="row mt-4">
              <div class="col-md-6">
                <h5>Untuk SMP dan SMA Sederajat di Kota Tegal</h5>
                <ul class="nav nav-tabs tab-simple-styled" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="tab-3-1" data-toggle="tab" href="#home-3-1"
                    role="tab" aria-controls="home-3-1" aria-selected="true">
                    <i class="mdi mdi-weather-night"></i>Permasalahan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tab-3-2" data-toggle="tab" href="#profile-3-2"
                    role="tab" aria-controls="profile-3-2" aria-selected="false">
                    <i class="mdi mdi-tag-multiple"></i>Solusi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tab-3-3" data-toggle="tab" href="#contact-3-3"
                    role="tab" aria-controls="contact-3-3" aria-selected="false">
                    <i class="mdi mdi-border-outside"></i>Manfaat</a>
                  </li>
                </ul>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="home-3-1" role="tabpanel" aria-labelledby="tab-3-1">
                    <p class="text-justify">Perkembangan teknologi informasi saat ini telah membawa perubahan besar bagi manusia,
                    termasuk cara untuk menerapkan pemungutan suara. Penggunaan teknologi komputer dalam pelaksanaan
                    pemungutan suara dikenal sebagai pemungutan suara elektronik (E-Voting).
                    Dengan adanya e-voting proses pemilihan dan perhitungan suara menjadi lebih efektif dan efisien.</p>
                    <p class="text-justify">Pemilihan ketua organisasi siswa intra sekolah (OSIS) adalah acara tahunan yang rutin diadakan
                        setahun sekali di sekolah. Saat ini proses pemilihan diterapkan di sekolah berdasarkan
                        perolehan suara terbanyak atau disebut voting konvensional. Seleksi dilakukan dengan menggunakan
                        surat suara yang dibagikan kepada siswa.</p>
                    <p class="text-justify">Masalah yang terjadi dalam pemungutan suara konvensional adalah cukup banyak surat suara
                         yang tidak valid, proses pemilihan yang tidak efektif, proses perhitungan suara yang
                         tidak efisien, dan sering terjadi kecurangan dalam proses login.
                        Selain itu, Kebanyakan aplikasi e-voting ketua dan wakil OSIS yang sudah ada
                        hanya bisa digunakan untuk satu sekolah saja sehingga tiap sekolah harus mempunyai
                        aplikasi e-voting sendiri-sendiri dan harus mengeluarkan biaya yang banyak jika ingin
                        mempunyai aplikasi e-voting sendiri.</p>

                  </div>
                  <div class="tab-pane fade" id="profile-3-2" role="tabpanel" aria-labelledby="tab-3-2">
                    <p>Dengan menggunakan aplikasi E-Voting ini proses pemilihan ketua dan wakil OSIS menjadi lebih mudah.
                    Terdapat 3 User(pengguna) dalam aplikasi ini</p>
                    <strong>1. Super Admin</strong>
                    <p>Super Admin dapat mengelola data Akun Admin Sekolah yang sudah mendaftar dan juga mengelola
                        nama-nama sekolah yang ada di Kota Tegal.</p>
                    <strong>2. Admin Sekolah</strong>
                    <p>Admin Sekolah yang sudah melakukan pendaftaran, dapat menambahka data siswa sekolahnya yang akan
                        mengikuti pemilihan ketua/wakil OSIS dengan import file CSV untuk mempercepat waktu.
                        Kemudian menambahkan data Calon Ketua/Wakil OSIS, lalu membuat jadwal acara pemilihan, dan
                        melihat hasil pemilihan.</p>
                    <strong>3. Siswa</strong>
                    <p>Siswa yang telah ditambahkan oleh Admin sekolah, dapat menggunakan aplikasi mobile
                        E-voting OSIS dan langsung login menggunakan emailnya dan juga dengan memasukkan password random
                        yang telah dikirimkan secara otomatis ke email siswa. Sehingga siswa dapat melakukan pemilihan
                        ketua/wakil OSIS dengan HP mereka tanpa perlu datang ke bilik suara.
                    </p>

                    <strong><p>Aplikasi E-Voting ini digunakan hanya untuk SMP dan SMA Sederajat Kota Tegal.</p></strong>
                  </div>
                  <div class="tab-pane fade" id="contact-3-3" role="tabpanel" aria-labelledby="tab-3-3">
                    <p>1. Mampu mengetahui hasil pemilihan yang akurat tanpa perlu takut adanya kecurangan</p>
                    <p>2. Tidak perlu menyediakan absen kehadiran bagi siswa yang akan memilih.</p>
                    <p>3. Proses pemungutan dan perhitungan suara jadi lebih cepat dan mudah.</p>
                    <p>4. Mengurangi biaya yang dikeluarkan sekolah</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <img class="img-fluid rounded" src="{{ asset ('assets-sekolah/images/samples/landing/landingpage.JPG') }}" alt="tab preview">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>
<!-- page-body-wrapper ends -->
</div>
<footer class="footer">
    <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 <a href="http://evoting-osis.herokuapp.com/" target="_blank">Evoting</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Evoting OSIS<i class="mdi mdi-heart text-danger"></i></span>
    </div>
</footer>
<!-- container-scroller -->
<!-- plugins:js -->
@include('templates.partials.adminhome._script')
</body>

</html>
