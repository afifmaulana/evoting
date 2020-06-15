<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HasilResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"            => $this->id,
            "calon"         => new CalonResource($this->calon),
            "adminsekolah"  => new AdminSekolahResource($this->adminsekolah),
            "pemilihan"     => $this->id_pemilihan,
            "total"         => $this->total,
        ];
    }
}
