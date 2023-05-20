<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMahasiswaRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nim' => 'required|min:10',
            'nama' => 'required',
            'foto_mhs' => 'required',
            'jurusan' => 'required',
            'no_hp' => 'required|min:12',
            'email' => 'required',
            'tanggal_lahir' => 'required',
            'kelas_id' => 'required',
        ];
    }
}
