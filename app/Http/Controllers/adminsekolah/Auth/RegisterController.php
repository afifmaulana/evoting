<?php

namespace App\Http\Controllers\adminsekolah\Auth;

use App\AdminSekolah;
use App\Sekolah;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
        $this->validate($request, [
            'nama_admin'        => 'required',
            'nama_sekolah'      => 'required|unique:admin_sekolahs',
            'email'             => 'required|unique:admin_sekolahs|email',
            'password'          => 'required|confirmed'
        ]);

        $data = new AdminSekolah();
        $data->nama_admin   = $request->nama_admin;
        $data->nama_sekolah = $request->nama_sekolah;
        $data->kategori     = $request->kategori;
        $data->email        = $request->email;
        $data->password     = bcrypt($request->password);
        if ($data->save()){
            return redirect()->route('adminsekolah.login');
        }else{
            return back()->withErrors();
        }

    }
}
