<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id_adminsekolah'       => (int)$this->id_adminsekolah,
            'nis'                   => $this->nis,
            'nama_siswa'            => $this->nama_siswa,
            'email'                 => $this->email,
            'kelas'                 => $this->kelas
        ];
    }
}
