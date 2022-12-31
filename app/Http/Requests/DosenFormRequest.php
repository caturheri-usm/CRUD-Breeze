<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DosenFormRequest extends FormRequest
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
            'nidn' => [
                'required',
                'max:15'
            ],
            'nama' => [
                'required',
                'max:150'
            ],
            'pendidikan' => [
                'required',
                'max:50'
            ],
            'univ' => [
                'required',
                'max:150'
            ],
            'foto' => [
                'image',
                'mimes:jpg,png,jpeg',
            ]
        ];
    }
}
