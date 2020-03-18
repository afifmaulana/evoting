<?php

namespace App\Http\Controllers\superusers;

use App\Sekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Sekolah::all();
        return view('pages.superadmin.sekolah.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superadmin.sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'nama_sekolah' => 'required|unique:sekolahs',

        ]);

        $data = new Sekolah();
        $data->nama_sekolah = $request->nama_sekolah;
        $data->kategori = $request->kategori;
        //dd($request->all());
        $data->save();

        return redirect()->route('sekolah.index')->with('create', 'Berhasil Menambahkan Data');

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
        $data = Sekolah::find($id);
        return view('pages.superadmin.sekolah.edit', compact('data'));
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
        $data = Sekolah::find($id);
        $data->nama_sekolah = $request->nama_sekolah;
        $data->kategori = $request->kategori;

        $data->update();
        return redirect()->route('sekolah.index')->with('update', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Sekolah::find($id);
        $data->delete();
        return redirect()->route('sekolah.index')->with('delete', 'Berhasil Menghapus Data');
    }
}
