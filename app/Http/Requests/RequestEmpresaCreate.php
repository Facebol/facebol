<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestEmpresaCreate extends FormRequest
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
            'cod_face'=>'required|exists:users,cod_face',
            'nombre'=>'required|unique:empresas',
            'descripcion'=>'required',
            'telefono'=>'required|min:7|max:8',
            'email'=>'required|unique:empresas',
            'facebook'=>'required|unique:empresas',
            'promocion'=>'required',
            'descuento'=>'required',
            'direccion'=>'required',
            'horario'=>'required',
            'imagen'=>'required|image|unique:empresas',
            'video'=>'required'
        ];
    }
}
