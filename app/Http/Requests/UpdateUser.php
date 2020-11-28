<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
            'name' => 'required|max:100',
            'email' => 'required|max:100|unique:users,email,NULL,id,deleted_at,NULL'.$this->user->id,
            'password' => 'required_with:confirm_password|same:confirm_password'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "El nombre es requerido",
            'email.required' => "El Email es requerido",
            'email.unique' => "Este email ya esta en uso",
            'password.same' => "Las contraseñas no coinciden",
        ];
    }
}
