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
        $datas = Calon::all();
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

        if ($a){
            $data = new Calon();
            $data->id_siswa = $a->id;
            $data->visi = $request->visi;
            $data->misi = $request->misi;
            $data->foto = $request->foto;
            $data->save();

            return redirect()->route();
        }else{
            return redirect()->back()->with('');
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
        //
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
