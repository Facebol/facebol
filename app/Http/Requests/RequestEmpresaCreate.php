<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
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
            'cod_face'=>['required', Rule::exists('users')->where(function ($query) {
                $query->where('tipo', 'Empresa');
            }),
        ], 
            'nombre'=>'required|unique:empresas',
            'descripcion'=>'required',
            'telefono'=>'required|numeric|unique:empresas',
            'email'=>'required|unique:empresas',
            'facebook'=>'required|unique:empresas',
            'promocion'=>'required',
            'descuento'=>'required',
            'direccion'=>'required',
            'horario'=>'required',
            'imagen'=>'required|image|unique:empresas',
            'video'=>'required',
            'web'=>'unique:empresas'
        ];
    }
}
