<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    protected $guarded = [];

    public function siswa(){

        return $this->belongsTo(User::class, 'id_siswa', 'id');
    }
}
