<?php

namespace App\Http\Controllers\superadmin;

use App\AdminSekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersVerifiedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:superadmin');
    }

    public function index()
    {
        $datas = AdminSekolah::all()->where('status','2');
        return view('pages.superadmin.user.users_verification', compact('datas'));
    }

    public function destroy($id)
    {
        $data = AdminSekolah::find($id);
        $data->update(['status' => '0']);
        return redirect()->route('users_verification.index')->with('create', 'Berhasil Tidak Mengkonfirmasi Admin Sekolah');
    }
}
