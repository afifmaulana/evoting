<?php

namespace App\Http\Controllers\adminsekolah;

use App\Calon;
use App\Hasil;
use App\Pemilihan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class PemilihanController extends Controller
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
        $data = Pemilihan::where('id_adminsekolah', Auth::guard('adminsekolah')->user()->id)->first();
        if ($data){
            $tahun = substr($data->tahun_ajaran, 0, 4);
        }else{
            $tahun = 0;
        }
        $datas = Pemilihan::where('id_adminsekolah', Auth::guard('adminsekolah')->user()->id)->get();
        //$datas = Pemilihan::all();
        return view('pages.adminsekolah.pemilihan.index', compact(['datas', 'tahun']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.adminsekolah.pemilihan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'tanggal'       => 'required',
            'waktu_mulai'   => 'required',
            'waktu_selesai' => 'required',
            'tahun_ajaran'  => 'required',
            ];

        $message = [
            'required'  => ':attribute tidak boleh kosong',
            'unique'  => ':attribute data sudah ada',
        ];

        $this->validate($request, $rules, $message);

        $date = date('Y-m-d');
        $data = new Pemilihan();
        $data->id_adminsekolah = Auth::guard('adminsekolah')->user()->id;
        $data->tanggal = $date;
        $data->waktu_mulai = $request->waktu_mulai;
        $data->waktu_selesai = $request->waktu_selesai;
        $data->tahun_ajaran = $request->tahun_ajaran;
        $data->save();

        $calons = Calon::where('id_adminsekolah', Auth::guard('adminsekolah')->user()->id)->get();
        foreach ($calons as $calon){
            $item = [
                'id_calon' => $calon->id,
                'id_adminsekolah' => Auth::guard('adminsekolah')->user()->id,
                'id_pemilihan' => $data->id,
                'total' => 0
            ];
            Hasil::create($item);
        }



        return redirect()->route('pemilihan.index')->with('create', 'Berhasil mengubah Data');
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
        $rules = [
            'tanggal'       => 'required',
            'waktu_mulai'   => 'required',
            'waktu_selesai' => 'required',
            'tahun_ajaran'  => 'required',
        ];

        $message = [
            'required'  => ':attribute tidak boleh kosong',
            'unique'  => ':attribute data sudah ada',
        ];

        $this->validate($request, $rules, $message);

        $date = date('Y-m-d');
        $data = Pemilihan::find($id);
        $data->id_adminsekolah = Auth::guard('adminsekolah')->user()->id;
        $data->tanggal = $date;
        $data->waktu_mulai = $request->waktu_mulai;
        $data->waktu_selesai = $request->waktu_selesai;
        $data->tahun_ajaran = $request->tahun_ajaran;
        $data->update();

        $calons = Calon::where('id_adminsekolah', Auth::guard('adminsekolah')->user()->id)->get();
        foreach ($calons as $calon){
            $item = [
                'id_calon' => $calon->id,
                'id_adminsekolah' => Auth::guard('adminsekolah')->user()->id,
                'id_pemilihan' => $data->id,
                'total' => 0
            ];
            Hasil::create($item);
        }



        return redirect()->route('pemilihan.index')->with('create', 'Berhasil mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pemilihan::find($id);
        $data->delete();
        return redirect()->route('pemilihan.index')->with('delete', 'berhasil menghapus data');
    }
}
