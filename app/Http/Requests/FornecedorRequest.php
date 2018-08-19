<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedorRequest extends FormRequest
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
            'razao_social' => 'required',
            'cnpj' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'nome_contato' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'razao_social.required' => 'O campo razão social é obrigatório',
            'cnpj.required' => 'O campo cnpj é obrigatório',
            'email.required' => 'O campo e-mail é obrigatório',
            'telefone.required' => 'O campo telefone é obrigatório',
            'endereco.required' => 'O campo endereço é obrigatório',
            'cidade.required' => 'O campo cidade é obrigatório',
            'estado.required' => 'O campo estado é obrigatório',
            'nome_contato.required' => 'O campo nome do contato é obrigatório',
        ];
    }
}
