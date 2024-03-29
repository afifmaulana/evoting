<?php

namespace App\Http\Controllers\adminsekolah;

use App\User;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\CsvImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class DataSiswaController extends Controller
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

    public function formtambah()
    {
        return view('pages.adminsekolah.datasiswa.tambah_siswa');
    }


    public function tambahsiswa(Request $request)
    {

        $rules = [
            'nis' => 'required|unique:users',
            'nama_siswa' => 'required',
            'email'      => 'required|unique:users|email',

        ];

        $message = [
            'required'  => ':attribute tidak boleh kosong',
            'unique'    => ':attribute data sudah ada',
            'email'     => ':attribute harus sesuai format email',
        ];

        $this->validate($request, $rules, $message);

        $data = new User();
        $data->nis = $request->nis;
        $data->nama_siswa = $request->nama_siswa;
        $data->email = $request->email;

        $data->save();

        return redirect()->route('datasiswa.index')->with('create', 'Berhasil Menambahkan Data');
    }

    public function index()
    {
        $datas = User::all()->where('id_adminsekolah', Auth::guard('adminsekolah')->user()->id);
        return view('pages.adminsekolah.datasiswa.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.adminsekolah.datasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('file')->store('import');

        $import = new CsvImport;
        $import->import($file);

        if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }


        return back()->with('create', 'Berhasil Menambahkan Data Siswa');

    //    Excel::import(new CsvImport, request()->file('file'));

    //     return back();
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
        $data = User::find($id);
        return view('pages.adminsekolah.datasiswa.edit', compact('data'));
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
        $data = User::find($id);
        $data->nis          = $request->nis;
        $data->nama_siswa   = $request->nama_siswa;
        $data->kelas        = $request->kelas;
        $data->email        = $request->email;

        $data->update();

        return redirect()->route('datasiswa.index')->with('update', 'Berhasil Mengubah Data Siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('datasiswa.index')->with('delete', 'Berhasil Menghapus Data');
    }
}
