<?php

namespace App\Http\Controllers\adminsekolah;

use App\AdminSekolah;
use App\Sekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:adminsekolah');
    }

    public function index()
    {
        $datas = AdminSekolah::all();
        return view('pages.adminsekolah.profil.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'nama_admin'     => 'required|regex:/^[\pL\s\-]+$/u',
            'password'       => 'required|string|min:6',
            'foto'           => 'required|file|image|mimes:jpg,png,jpeg|max:2048',
            'nip'            => 'required',
            'no_hp'          => 'required|numeric|digits_between:11,13|regex:/(08)[0-9]{9}/|unique:admin_sekolahs',
            'alamat'         => 'required',
            'no_izin'        => 'required',



        ];
        $message = [
            'required'  => ':attribute tidak boleh kosong',
            'unique'    => ':attribute sudah terdaftar',
            'max'       => ':attribute maksimal :max karakter',
            'min'       => ':attribute minimal :min karakter',
            'email'     => ':attribute harus sesuai format email',
            'digits_between' => ':attribute setidaknya :min sampai :max karakter',
            'numeric'   => ':attribute hanya boleh angka',
            'digits'    => ':attribute harus :digits karakter',
            'no_hp.regex'     => ':attribute harus sesuai format 08xx-xxxx-xxxx',
            'nama_admin.regex'     => ':attribute harus huruf semua',
        ];


        //dd(Auth::user());
        $data = Auth::guard('adminsekolah')->user();
        $data->nama_admin = $request->nama_admin;
        $data->nama_sekolah = $request->nama_sekolah;
        $data->alamat = $request->alamat;
        $data->nip = $request->nip;
        $data->no_hp = $request->no_hp;
        $data->no_izin = $request->no_izin;

        if ($request->file('foto') == ''){
            $data->foto = $request->old_foto;
        }else{
            $file = $request->file('foto');
            $file_name = date('ymdHis') . "-" . $file->getClientOriginalName();
            $file_path = 'data-calon/' . $file_name;
            Storage::disk('s3')->put($file_path, file_get_contents($file));
            $data->foto = Storage::disk('s3')->url($file_path, $file_name);
        }
        $data->save();

        return redirect()->route('profilsekolah.index')->with('create', 'Berhasil mengubah Data');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //dd($a->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
