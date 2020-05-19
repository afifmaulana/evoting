<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CalonResource extends JsonResource
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
            "id"        => $this->id,
            'visi'      => $this->visi,
            'misi'      => $this->misi,
            'foto'      => $this->foto,
            'adminsekolah'          => new AdminSekolahResource($this->adminsekolah),
            'ketua'     => new SiswaResource($this->ketua),
            'wakil'     => new SiswaResource($this->wakil),
        ];
    }
}
