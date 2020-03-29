<?php

namespace App\Http\Controllers\adminsekolah;

use App\Calon;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataCalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Calon::all()->where('status', '1');
        return view('pages.adminsekolah.datacalon.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.adminsekolah.datacalon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $a = User::where('nama_siswa', '=',$request->name)
            ->where('id_adminsekolah', '=', Auth::guard('adminsekolah')->user()->id)->first();
        //dd($a->id);

        $image=$request->file('foto');
        $filename=rand().'.'.$image->getClientOriginalExtension();
        $path=public_path('uploads/adminsekolah');
        $image->move($path,$filename);

        if ($a){
            $data = new Calon();
            $data->id_siswa = $a->id;
            $data->visi = $request->visi;
            $data->misi = $request->misi;
            $data->foto = $filename;
            $data->save();

            return redirect()->route('datacalon.index')->with('create', 'Berhasil Menambahkan Data');
        }else{
            return redirect()->back()->with('datacalon.create');
        }
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
        $data = Calon::find($id);
        return view('pages.adminsekolah.datacalon.edit', compact('data'));
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

        $a = User::where('nama_siswa', '=',$request->name)
            ->where('id_adminsekolah', '=', Auth::guard('adminsekolah')->user()->id)->first();
        //dd($a->id);

        $image=$request->file('foto');
        $filename=rand().'.'.$image->getClientOriginalExtension();
        $path=public_path('uploads/adminsekolah');
        $image->move($path,$filename);

        if ($a){
            $data = Calon::find($id);
            $data->id_siswa = $a->id;
            $data->visi = $request->visi;
            $data->misi = $request->misi;
            $data->foto = $filename;
            $data->update();

            return redirect()->route('datacalon.index')->with('create', 'Berhasil Menambahkan Data');
        }else{
            return redirect()->back()->with('datacalon.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Calon::findOrFail($id);
        $data ->update(['status' => '0']);
        return redirect()->route('datacalon.index')->with('delete', 'berhasil menghapus data');
    }
}
