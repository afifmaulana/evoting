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
                <li class="breadcrumb-item active" aria-current="page"><span>Bantuan</span></li>
              </ol>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Bantuan</h4>
                        <p3>Apakah Anda mengalami kendala dalam penggunaan aplikasi ini?</p3>
                        <p></p>
                        <div class="accordion basic-accordion" id="accordion" role="tablist">
                          <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                              <h6 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                  <i class="card-icon mdi mdi-checkbox-marked-circle-outline"></i>
                                  Bagaimana cara menggunakan aplikasi ini?
                                </a>
                              </h6>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-3">
                                    <img class="img-fluid rounded" src="{{ asset ('assets-sekolah/images/samples/landing/landingpage.JPG') }}" alt="image">
                                  </div>
                                  <div class="col-md-9">
                                    <p>Sebelumnya perlu Anda ketahui, aplikasi ini dibuat hanya untuk SMP dan SMA Sederajat di Kota Tegal
                                        yang nama sekolahnya sudah ditambahkan oleh Super Admin. Cara penggunaan aplikasi
                                        E-Voting ini sebagai berikut :
                                    </p>
                                    <strong>1. Daftar sebagai Admin Sekolah</strong>
                                    <p>Klik Daftar dan isi form pendaftaran pada web Admin Sekolah, dan pastikan nomor izin sekolahnya
                                        harus sesuai dengan data yang ada di Super Admin, jika berbeda maka pendaftaran tidak dapat dilakukan.
                                        Hal ini untuk mengurangi pengguna tidak bertanggung jawab yang dapat mendaftar sebagai admin sekolah.
                                    </p>
                                    <strong>2. Tambahkan Data Siswa</strong>
                                    <p>Setelah Anda berhasil mendaftar sebagai admin sekolah, langkah selanjutnya adalah
                                        menambahkan data siswa yang akan mengikuti proses pemilihan ketua/wakil OSIS dengan
                                        cara import file datasiswa Anda dalam bentuk <strong>.CSV</strong> supaya cepat.
                                        Isi filenya berupa nis, nama siswa, kelas, dan email. Pada saat proses menambahkan data siswa
                                        sistem akan secara otomatis mengirim <strong>password random</strong> ke email siswa.
                                        Password tersebut digunakan siswa untuk login di aplikasi mobile E-Voting agar siswa
                                        yang lain tidak dapat menggunakan akun temannya.
                                    </p>
                                    <strong>3. Tambahkan Data Calon</strong>
                                    <p>Jika sudah, Admin sekolah dapat menambahkan para kandidat/calon ketua dan wakil OSIS
                                        yang akan mengikuti proses pemilihan.
                                    </p>
                                    <strong>4. Atur Jadwal Pemilihan</strong>
                                    <p>Kemudian Admin sekolah membuat atau mengatur jadwal pemilihan yang akan diadakan
                                        di sekolahnya.
                                    </p>
                                    <strong>5. Siswa Melakukan Voting</strong>
                                    <p>Lalu saat hari pemilihan dilaksanakan siswa login di aplikasi mobile E-Voting
                                         menggunakan password yang dikirim ke emailnya dan dapat mengubah passwordnya
                                         agar mudah diingat, kemudian siswa dapat melihat wajah calon beserta
                                         visi misinya untuk menentukan siapa yang akan dipilih.
                                         Jika sudah, siswa dapat melakukan pemilihan dan melihat hasilnya secara langsung.
                                    </p>
                                    <strong>6. Admin Sekolah Cetak Hasil</strong>
                                    <p>Jika proses pemilihan telah selesai, admin sekolah dapat melihat dan mencetak hasil
                                        pemilihan dalam bentuk PDF.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                              <h6 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <i class="card-icon mdi mdi-account"></i>Tidak dapat mendaftar?
                                </a>
                              </h6>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                  <i class="mdi mdi-checkbox-marked-circle-outline mr-3"></i>Jika Anda gagal dalam melakukan pendaftaran sebagai Admin sekolah, mohon perhatikan
                                  hal-hal berikut ini :
                                <ol class="pl-3 mt-4">
                                  <li>Pastikan semua kolom form diisi</li>
                                  <li>Nomor izin pastikan sesuai dengan yang terdaftar pada Super Admin, karena jika berbeda maka tidak dapat mendaftar.
                                      hal ini untuk mencegah para pengguna tidak bertanggung jawab agar tidak bisa mendaftar dan mengaku sebagai admin sekolah.
                                  </li>
                                  <li>Cek email Anda untuk melakukan konfirmasi/aktivasi Akun</li>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                              <h6 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                  <i class="card-icon mdi mdi-checkbox-marked-circle-outline"></i>
                                  Siswa tidak dapat melakukan login?
                                </a>
                              </h6>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-3">
                                    <img class="img-fluid rounded" src="{{ asset ('assets-sekolah/images/samples/landing/login.jpg') }}" alt="image">
                                  </div>
                                  <div class="col-md-9">
                                    <p>Hal-hal yang perlu di ketahui untuk penggunaan Aplikasi mobile E-Voting
                                    </p>
                                    <strong>1. Data Siswa telah ditambahkan Admin sekolah</strong>
                                    <p>Pastikan siswa yang akan mengikuti proses pemilihan ketua/wakil osis telah ditambahkan dalam <strong>Data Siswa</strong>
                                         dan email yang ditambahkan aktif, karena digunakan untuk menerima password random untuk login.
                                    </p>
                                    <strong>2. Masukkan email dan Password dengan benar</strong>
                                    <p>Siswa diharapkan untuk mengecek email untuk melihat password random yang dikirim ke email siswa untuk login
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
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
