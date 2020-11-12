<?php

namespace App\Http\Controllers\adminsekolah;

use App\Calon;
use foo\bar;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DataCalonController extends Controller
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
        $datas = Calon::where('id_adminsekolah', Auth::guard('adminsekolah')->user()->id)
        ->where('status', '1')->get();
        return view('pages.adminsekolah.datacalon.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = User::where('id_adminsekolah', Auth::guard('adminsekolah')->user()->id)->get();
        return view('pages.adminsekolah.datacalon.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'id_ketua' => 'unique:calons',
            'id_wakil' => 'unique:calons',
            'visi' => 'required',
            'misi' => 'required',
            'foto' => 'required|file|image|mimes:jpg,png,jpeg|max:2048',

        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute sudah terdaftar',
            'mimes' => ':Upload File tidak sesuai'
        ];

        $this->validate($request, $rules, $message);


//        $image=$request->file('foto');
//        $filename=rand().'.'.$image->getClientOriginalExtension();
//        $path=public_path('uploads/adminsekolah');
//        $image->move($path,$filename);

        $names = $request->name;

        if (count($names) > 2) {
            return redirect()->back()->withErrors(['msg', 'The Message']);
        }

        $data = new Calon();
        $data->id_adminsekolah = Auth::guard('adminsekolah')->user()->id;
        $data->id_ketua = $names[0];
        $data->id_wakil = $names[1];
        $data->visi = $request->visi;
        $data->misi = $request->misi;
//        $data->foto = $file_name;

        $file = $request->file('foto');
        $file_name = date('ymdHis') . "-" . $file->getClientOriginalName();
        $file_path = 'data-calon/' . $file_name;
        Storage::disk('s3')->put($file_path, file_get_contents($file));
        $data->foto = Storage::disk('s3')->url($file_path, $file_name);

        $data->save();

        return redirect()->route('datacalon.index')->with('create', 'Berhasil Menambahkan Data');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Calon::find($id);
        return view('pages.adminsekolah.datacalon.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = Calon::where('id',$id)->first();;
        return view('pages.adminsekolah.datacalon.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $a = User::where('nama_siswa', '=', $request->name)
            ->where('id_adminsekolah', '=', Auth::guard('adminsekolah')->user()->id)->first();

        $image = $request->file('foto');
        $filename = rand() . '.' . $image->getClientOriginalExtension();
        $path = public_path('uploads/adminsekolah');
        $image->move($path, $filename);
        $names = $request->name;

        if (count($names) > 2) {
            return redirect()->back()->withErrors(['msg', 'The Message']);
        }

        if ($a) {
            $data = Calon::find($id);
            $data->id_adminsekolah = Auth::guard('adminsekolah')->user()->id;
            $data->id_ketua = $names[0];
            $data->id_wakil = $names[1];
            $data->visi = $request->visi;
            $data->misi = $request->misi;
            $data->foto = $request->file('foto') == '' ? $request->old_foto : $filename;
            $data->update();

            return redirect()->route('datacalon.index')->with('update', 'Berhasil Mengubah Data');
        } else {
            return redirect()->back()->with('datacalon.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Calon::find($id);
        $data->delete();
        return redirect()->route('datacalon.index')->with('delete', 'berhasil menghapus data');
    }
}
