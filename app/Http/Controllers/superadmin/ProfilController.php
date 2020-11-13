<?php

namespace App\Http\Controllers\superadmin;

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
        $this->middleware('auth:superadmin');
    }

    public function index()
    {
        return view('pages.superadmin.profil');
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
        $data = Auth::guard('superadmin')->user();
        $data->name = $request->name;
        // if ($request->file('path_avatar') == ''){
        //     $data->path_avatar = $request->old_path_avatar;
        // }else{
        //     $image=$request->file('path_avatar');
        //     $filename=rand().'.'.$image->getClientOriginalExtension();
        //     $path=public_path('uploads/superadmin');
        //     $image->move($path,$filename);
        //     $data->path_avatar = $filename;
        // }


        if ($request->file('path_avatar') == ''){
            $data->path_avatar = $request->old_path_avatar;
        }else{
            $file = $request->file('path_avatar');
            $file_name = date('ymdHis') . "-" . $file->getClientOriginalName();
            $file_path = 'superadmins/' . $file_name;
            Storage::disk('s3')->put($file_path, file_get_contents($file));
            $data->path_avatar = Storage::disk('s3')->url($file_path, $file_name);
        }
        $data->save();

        return redirect()->route('profiladmin.index')->with('create', 'Berhasil mengubah Data');
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
