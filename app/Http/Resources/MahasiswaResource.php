<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nim' =>$this->nim,
            'nama' =>$this->nama,
            'foto_mhs' => $this->foto_mhs,
            'tanggal_lahir'=>$this->tanggal_lahir,
            'email' =>$this->email,
            'no_hp' =>$this->no_hp,
            'jurusan' =>strtoupper($this->jurusan),
            'kelas_id' =>$this->kelas_id,
        ];
    }

    
}
