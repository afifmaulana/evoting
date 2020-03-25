<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class CsvImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $logged_admin = Auth::guard('adminsekolah')->user()->id;
        $api_token = Hash::make($row["email"]);
        $password = Hash::make($row["nis"]);
        return new User([
            'id_adminsekolah'   => $logged_admin,
            'nis'               => $row["nis"],
            'nama_siswa'        => $row["nama_siswa"],
            'kelas'             => $row["kelas"],
            'email'             => $row["email"],
            'api_token'         => $api_token,
            'password'          => $password
        ]);
    }
}
