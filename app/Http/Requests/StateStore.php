<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StateStore extends FormRequest
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
            'name' => 'required|unique:states,name,NULL,id,deleted_at,NULL',
            'country_id' => 'required|exists:countries,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.unique' => 'Ya existe un estado con este nombre',
            'country_id.required' => 'El país es requerido',
            'country_id.exists' => 'El estado debe estar dado de alta'
        ];
    }
}
