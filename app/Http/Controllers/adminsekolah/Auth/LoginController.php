<?php

namespace App\Http\Controllers\adminsekolah\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

   // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest:adminsekolah')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth_adminsekolah.login');
    }

    public function login(Request $request)
    {
        $rules =  [
            'email' => 'required|string',
            'password' => 'required|string|min:6'
        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'min' => ':attribute minimal :min',
        ];

        $this->validate($request, $rules, $message);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if (Auth::guard('adminsekolah')->attempt($credential)){
            $user = Auth::guard('adminsekolah')->user();
            if ($user->email_verified_at != null) {
                return redirect()->intended(route('dashboard2.index'));
            }else{
                return redirect()->back()
//                    ->withInput($request->only('email'))
                    ->with('error', 'Mohon maaf, akun belum dapat digunakan. Mohon menunggu diverifikasi Admin!');
            }
        }

        /*if (Auth::guard('adminsekolah')->attempt($credential, $request->remember)){
            return redirect()->intended(route('dashboard2.index'));
        }*/
        return redirect()->back()->withInput($request->only('email'))
            ->with('error', 'masukkan email dan passsword yang benar');

    }

    public function logout()
    {
        Auth::guard('adminsekolah')->logout();
        return redirect('/');
    }

}
