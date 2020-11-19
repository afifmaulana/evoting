<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
        table, th, td {
          border: 1px solid black;
        }
        table.center {
          margin-left: auto;
          margin-right: auto;
        }
        </style>
        </head>

<body>
            <div class="card-body">
              <h3 align="center">ORGANISASI SISWA INTRA SEKOLAH (OSIS)</h3>
              <h3 align="center">{{Auth::guard('adminsekolah')->user()->nama_sekolah}}</h3>
              <p align="center">{{Auth::guard('adminsekolah')->user()->alamat}},
                 No_Telp {{Auth::guard('adminsekolah')->user()->no_hp}},
                 E-mail : {{Auth::guard('adminsekolah')->user()->email}}</p>
              <hr>
              <h3 align="center">PENGUMUMAN HASIL PEMILIHAN KETUA DAN WAKIL OSIS</h3>
              <h3 align="center">{{Auth::guard('adminsekolah')->user()->nama_sekolah}}</h3>
              <h4 align="center">Tahun Ajaran 2020/2021</h4>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="center">
                    <thead>
                      <tr>
                          <th>No</th>
                          <th>Tahun Ajaran</th>
                          <th>Nama Ketua</th>
                          <th>Nama Wakil</th>
                          <th>Hasil</th>
                          <th>Tanggal</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $data->pemilihan->tahun_ajaran }}</td>
                          <td>{{ $data->calon->ketua->nama_siswa }}</td>
                          <td>{{ $data->calon->wakil->nama_siswa }}</td>
                          <td>{{ $data->total }}</td>
                          <td>{{ $data->pemilihan->tanggal }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <p align="center"> Berdasarkan dari data hasil pemilihan ketua dan wakil OSIS untuk periode 2020/2021
                  di atas maka telah ditetapkan bahwa dengan ini saudara Anu dan Ani telah memenangkan pemilihan ini,
                  dan resmi menjadi ketua dan wakil OSIS untuk periode 2020/2021.
              </p>
              <br>
              <br>
              <br>
              <br>
              <p align="right">Tegal, 20 November 2020</p>
              <br>
              <br>
              <br>
              <br>
              <p align="right">KEPALA SEKOLAH</p>

            </div>
</body>

</html>
