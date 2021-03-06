<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperationtyUpdate extends FormRequest
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
            'name' => 'required|unique:operationtypes,name,NULL,id,deleted_at,NULL'.$this->operationtype->id,
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.unique' => 'Este nombre de tipo de operacón ya existe'
        ];
    }
}
