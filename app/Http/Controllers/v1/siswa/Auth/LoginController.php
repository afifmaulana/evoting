<?php

namespace App\Http\Controllers\v1\siswa\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){

        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('siswa')->attempt($credential)){
            $user = Auth::guard('siswa')->user();
            return response()->json([
                'status' => true,
                'message' => 'Berhasil login',
                'data' => $user,
            ], 200);
        }

        return response()->json([
           'status' => false,
            'message' => 'masukkan username dan password yang benar',
            'data' => (object) []
        ], 401);

    }
}
