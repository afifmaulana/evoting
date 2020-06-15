<?php

namespace App\Http\Controllers\v1\siswa;

use App\Http\Resources\HasilResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Hasil;

class HasilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api-siswa');
    }

    public function hasil()
    {

    	$id_adminsekolah = Auth::user()->id_adminsekolah;
    	$hasil = Hasil::where('id_adminsekolah', $id_adminsekolah)->get();

    	return response()->json([
            'message' => 'successfully get hasil voting',
            'status' => true,
            'data' => HasilResource::collection($hasil)
        ]);
    }
}
