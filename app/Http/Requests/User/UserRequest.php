<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name'=> ['required', 'string'],
            'last_name'=> ['required', 'string'],
            'email'=> ['required', 'email'],
            'password'=> ['confirmed', 'string', 'min:8'],
        ];

        return $rules;
    }

    public function messages(){
        return [
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El nombre debe de ser valido',
            'last_name.required' => 'El apellido es requerido',
            'last_name.string' => 'El apellido debe de ser valido',
            'email.required' => 'El correo electronico es requerido',
            'email.email' => 'El correo electronico debe de ser valido',
        ];
    }
}
