<?php

namespace App\Http\Controllers\v1\siswa;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{


    /**
     * UpdatePasswordController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth:api-siswa']);
    }

    public function updatePassword(Request $request)
    {
        $siswa = \auth()->user();

        $siswa->password = Hash::make($request->password);
        $siswa->update();
        if ($request->password != null) {
            return response()->json([
                'message' => 'successfully update password',
                'status' => true,
                'data' => $siswa
            ]);
        } else {
            return response()->json([
                'message' => 'password harus diisi',
                'status' => false,
                'data' => (object)[],
            ], 400);
        }

    }
}
