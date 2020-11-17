<?php

namespace App\Exports;

use App\Hasil;
use App\Pemilihan;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class HistoryExport implements FromCollection, WithHeadings, WithMapping
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Hasil::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'Tahun Ajaran',
            'Nama Ketua',
            'Nama Wakil',
            'Hasil',
            'Tanggal',

        ];
    }


    public $no = 1;

    public function map($row): array
    {
        $fields = [
            $this->no,
            $row->pemilihan->tahun_ajaran,
            $row->calon->ketua->nama_siswa,
            $row->calon->wakil->nama_siswa,
            $row->total,
            $row->pemilihan->tanggal,

        ];
        $this->no++;
        return $fields;
    }
}
