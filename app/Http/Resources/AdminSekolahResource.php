<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminSekolahResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                    => $this->id,
            'nama_admin'            => $this->nama_admin,
            'nama_sekolah'          => $this->nama_sekolah,
            'kategori'              => $this->kategori,
            'alamat'                => $this->alamat,
            'foto'                  => $this->foto,
            'email'                 => $this->email,

        ];
    }
}
