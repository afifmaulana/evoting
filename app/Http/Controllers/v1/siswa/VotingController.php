<?php

namespace App\Http\Controllers\v1\siswa;

use App\AdminSekolah;
use App\Hasil;
use App\Pemilihan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VotingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api-siswa');
    }

    public function pemilihan()
    {
        $tahun = Carbon::now()->format('Y');
        $jam = Carbon::now()->format('H');
        $id_sekolah = Auth::user()->id_adminsekolah;
        $pemilihan = Pemilihan::where('id_adminsekolah', $id_sekolah)
            ->whereYear('tanggal', $tahun)->first();

        $jam_mulai = substr($pemilihan->waktu_mulai, 0, 2);
        $jam_selesai = substr($pemilihan->waktu_selesai, 0, 2);

        $result = [];
        if ($jam_mulai <= $jam && $jam_selesai >= $jam){
            $result = $pemilihan;
            //array_push($result, $pemilihan);
        }

        return response()->json([
            'message' => 'successfully get pemilihan',
            'status' => true,
            'data' => $result
        ]);
    }

    public function voting(Request $request)
    {
        $hasil = Hasil::where('id_calon', $request->id_calon)
            ->where('id_adminsekolah', $request->id_adminsekolah)->first();
        $hasil->total = $hasil->total + 1;
        $hasil->update();

        $user = Auth::user();
        $user->status = true;
        $user->update();

        return response()->json([
            'message' => 'successfully voting',
            'status' => true,
//            'data' => [
//            'hasil' => $hasil,
//            'user' => $user
//            ]
        ]);
    }
}
