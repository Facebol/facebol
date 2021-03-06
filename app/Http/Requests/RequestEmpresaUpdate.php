<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RequestEmpresaUpdate extends FormRequest
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
            'nombre'=>'required',
            'descripcion'=>'required',
            'telefono'=>'required|min:7|max:8',
            'email'=>'required',
            'facebook'=>'required',
            'promocion'=>'required',
            'descuento'=>'required',
            'direccion'=>'required',
            'horario'=>'required',
            'video'=>'required'
        ];
    }
}
