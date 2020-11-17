<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilihan extends Model
{
    protected $guarded = [];

    public function hasils()
    {
        return $this->hasMany(Hasil::class, 'id_pemilihan', 'id');
    }

    
}
