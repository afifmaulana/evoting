<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaResource extends JsonResource
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
            //'adminsekolah'          => new AdminSekolahResource($this->adminsekolah),
            'nis'                   => $this->nis,
            'nama_siswa'            => $this->nama_siswa,
            'kelas'                 => $this->kelas,
            'email'                 => $this->email,
        ];
    }
}
