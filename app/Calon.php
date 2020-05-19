<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    protected $guarded = [];

    public function ketua(){

        return $this->belongsTo(User::class, 'id_ketua', 'id');
    }

    public function wakil(){

        return $this->belongsTo(User::class, 'id_wakil', 'id');
    }

    public function adminsekolah(){

        return $this->belongsTo(AdminSekolah::class, 'id_adminsekolah', 'id');
    }
}
