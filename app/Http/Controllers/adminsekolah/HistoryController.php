<?php

namespace App\Http\Controllers\adminsekolah;

use App\Exports\HistoryExport;
use App\Hasil;
use App\Pemilihan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Stmt\ElseIf_;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminId = Auth::guard('adminsekolah')->user()->id;
        $datas = Pemilihan::orderBy('id', 'DESC')->where('id_adminsekolah', $adminId)->get();
        return view('pages.adminsekolah.history.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function exportexcel()
     {
         return Excel::download(new HistoryExport, 'Hasil Pemilihan.xlsx');
     }

     public function exportpdf()
     {
        $sekolah = Auth::guard('adminsekolah')->user();
        $datas = Hasil::where('id_adminsekolah', $sekolah->id)->get();

        $winner = Hasil::where('id_adminsekolah', $sekolah->id)->get();
        $res = [];
        foreach ($winner as $val) {
            if(empty($res)){
                $res = $val;
            }elseif($res['total'] < $val->total){
                $res = $val;
            }
        }
        $pdf = PDF::loadview('pages.adminsekolah.history.pdf', [
                'datas' => $datas,
                'winner' => $res,
                'sekolah' => $sekolah
            ]);
        // return view('pages.adminsekolah.history.pdf', [
        //         'datas' => $datas,
        //         'winner' => $res,
        //         'sekolah' => $sekolah
        //     ]);
        return $pdf->download('historypemilihan.pdf');
     }


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
        //
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
