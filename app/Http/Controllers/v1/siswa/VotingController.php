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
        $tahun = Carbon::now()->format('Y-m-d');
        $jam = Carbon::now()->format('H:i');
        $id_sekolah = Auth::user()->id_adminsekolah;
        $pemilihan = Pemilihan::where('id_adminsekolah', $id_sekolah)
            ->where('tanggal', $tahun)
            ->where('waktu_mulai','<=', $jam)
            ->where('waktu_selesai', '>=', $jam)
            ->first();

        return response()->json([
            'message' => 'successfully get pemilihan',
            'status' => true,
            'data' => $pemilihan
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
            'data' => $hasil
        ]);
    }
}
