<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $guarded = [];


    public function calon()
    {
        return $this->belongsTo(Calon::class, 'id_calon', 'id');
    }

    public function adminsekolah()
    {
        return $this->belongsTo(AdminSekolah::class, 'id_adminsekolah', 'id');
    }

    public function pemilihan()
    {
        return $this->belongsTo(Pemilihan::class, 'id_pemilihan', 'id');
    }

}
