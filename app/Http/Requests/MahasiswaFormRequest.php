<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nim' => [
                'required',
                'max:15',
            ],
            'nama' => [
                'required',
                'max:150'
            ],
            'umur' => [
                'required',
                'integer',
                'max:99'
            ],
            'alamat' => [
                'required',
                'max:255'
            ],
            'kota' => [
                'required',
                'max:100'
            ],
            'kelas' => [
                'required',
                'max:50'
            ],
            'jurusan' => [
                'required',
                'max:50'
            ]
        ];

    }
}
