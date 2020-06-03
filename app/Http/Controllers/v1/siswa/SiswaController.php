<?php

namespace App\Http\Controllers\v1\siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api-siswa');
    }

    public function profile()
    {
    	$user = Auth::user();

    	return response()->json([
            'message' => 'successfully get user is login',
            'status' => true,
            'data' => $user
        ]);
    }
}
