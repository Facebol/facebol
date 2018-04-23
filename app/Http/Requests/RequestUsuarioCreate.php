<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUsuarioCreate extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'ci' => 'required|numeric|unique:users',
            'direccion' => 'required|string|min:10|',
            'celular' => 'required|min:7|max:8|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'imagen'=>'required|image',
        ];
        
    }
}
