<?php

namespace App\Imports;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CsvImport implements ToModel, WithHeadingRow, WithValidation
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
        $password = rand();
        $passwordHash = Hash::make($password);

        Mail::send('emails.send_password',
            [
                'password' => 'password anda adalah ' . $password
            ],
            function ($message) use ($row) {
                $message->from('evoting@gmail.com', 'e-voting');
                $message->to($row["email"], $row["nama_siswa"]);
                $message->subject('Password Anda');
            }
        );
//        if(env('MAIL_HOST', false) == 'smtp.mailtrap.io'){
//            sleep(3); //use usleep(500000) for half a second or less
//        }

        return new User([
            'id_adminsekolah' => $logged_admin,
            'nis' => $row["nis"],
            'nama_siswa' => $row["nama_siswa"],
            'email' => $row["email"],
            'api_token' => $api_token,
            'password' => $passwordHash
        ]);
    }

    public function rules(): array
    {
        return [
            '*.email ' => ['email', 'unique:users,email']
        ];
    }
}
