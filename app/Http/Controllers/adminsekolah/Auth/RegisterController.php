<?php

namespace App\Http\Controllers\adminsekolah\Auth;

use App\AdminSekolah;
use App\Events\AdminSekolah\Auth\AdminSekolahActivationEmail;
use App\Sekolah;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:adminsekolah');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function showRegisterForm()
    {
        $datas = Sekolah::all();
        return view('auth_adminsekolah.register', compact('datas'));
    }

    public function store(Request $request){
        $rules = [
            'nama_admin'        => 'required',
            'nama_sekolah'      => 'required|unique:admin_sekolahs',
            'email'             => 'required|unique:admin_sekolahs|email',
            'password'          => 'required|confirmed',
            'no_izin'           => 'required|unique:admin_sekolahs'

        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute sudah terdaftar',
            'min' => ':attribute minimal :min',
        ];

        $this->validate($request, $rules, $message);

        $sekolah = Sekolah::where('no_izin', $request->no_izin)->first();
        if ($sekolah){
            $data = new AdminSekolah();
            $data->nama_admin   = $request->nama_admin;
            $data->nama_sekolah = $request->nama_sekolah;
            $data->kategori     = $request->kategori;
            $data->email        = $request->email;
            $data->password     = bcrypt($request->password);
            $data->no_izin      = $request->no_izin;
            $data->activation_token = Str::random(100);
            if ($data->save()){
                //event(new AdminSekolahActivationEmail($data));
                return redirect()->route('adminsekolah.login');
            }else{
                return redirect()->back()->withErrors();
            }
        }else{
            return redirect()->back()->with('error', 'no izin salah');
        }
        //return redirect()->route('adminsekolah.login')->with('succes', 'Berhasil Register, Silahkan Verifikasi Email');
    }
}
