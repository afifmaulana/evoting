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
        .text_content{
			text-indent: 60px;
		}
        p.ex1 {
            padding: 35px 70px 50px 90px;
        }
        p.ex2 {
            margin-left: 500px;
        }
        </style>
    </head>

<body>
            <div class="card-body">
              <h3 align="center">ORGANISASI SISWA INTRA SEKOLAH (OSIS)</h3>
              <h3 align="center">{{$sekolah->nama_sekolah}}</h3>
              <p align="center">{{$sekolah->alamat}},
                 No_Telp {{$sekolah->no_hp}},
                 E-mail : {{$sekolah->email}}</p>
              <hr>
              <h3 align="center">PENGUMUMAN HASIL PEMILIHAN KETUA DAN WAKIL OSIS</h3>
              <h3 align="center">{{$sekolah->nama_sekolah}}</h3>
              <h4 align="center">Tahun Ajaran {{ $winner->pemilihan->tahun_ajaran }}</h4>
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
              <p class="ex1"> Berdasarkan dari data hasil pemilihan ketua dan wakil OSIS untuk periode
                {{ $winner->pemilihan->tahun_ajaran }}
                  di atas maka telah ditetapkan bahwa dengan ini saudara {{ $winner->calon->ketua->nama_siswa }}
                  dan {{ $winner->calon->wakil->nama_siswa }} telah memenangkan pemilihan ini,
                  dan resmi menjadi ketua dan wakil OSIS untuk periode {{ $winner->pemilihan->tahun_ajaran }}.
              </p>
              <br>
              <br>
              <br>
              <br>
              <p align="right">Tegal, 25 November 2020</p>
              <br>
              <br>
              <br>
              <br>
              <p align="right">Revonda Andestiadi</p>
              <hr style="width:27%;text-align:right;margin-left:400">
              <p align="right">NIP.19660521199032006</p>

            </div>
</body>

</html>
