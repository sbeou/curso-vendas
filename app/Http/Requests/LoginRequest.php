<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'login' => ['required'],
            'senha' => ['required', 'min:6'],
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'O campo login é obrigatório',
            'senha.required' => 'O campo senha é obrigatório',
            'senha.min' => 'A senha deve ter no mínimo 6 caracteres',
        ];
    }
}
