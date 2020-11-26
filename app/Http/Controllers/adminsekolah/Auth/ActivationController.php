<?php

namespace App\Http\Controllers\adminsekolah\Auth;

use App\AdminSekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ActivationController extends Controller
{
    public function activate(Request $request)
    {
        $user = AdminSekolah::where('email', $request->email)->where('activation_token', $request->token)->firstOrFail();
        $user->status = true;
        $user->email_verified_at = now();
        $user->activation_token = null;
        $user->update();

        //Auth::guard('adminsekolah')->loginUsingId($user->id);

        return redirect()->route('adminsekolah.login')->with('success', 'Berhasil Activasi Email, Sekarang Anda bisa masuk');
        //return redirect()->route('dashboard2.index')->with('success', 'Berhasil Activasi Email, Sekarang Anda bisa masuk');
    }
}
