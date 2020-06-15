<?php

namespace App\Http\Controllers\adminsekolah;

use App\AdminSekolah;
use App\Sekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            $image=$request->file('foto');
            $filename=rand().'.'.$image->getClientOriginalExtension();
            $path=public_path('uploads/adminsekolah');
            $image->move($path,$filename);
            $data->foto = $filename;
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
