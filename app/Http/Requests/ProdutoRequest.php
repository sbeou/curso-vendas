<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'nome_produto' => 'required',
            'valor' => 'required',
            'data_validade' => 'required',
            'fornecedor' => 'required',
            'quantidade' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome_produto.required' => 'O nome é obrigatório',
            'valor.required' => 'O valor é obrigatório',
            'data_validade.required' => 'A data de validade é obrigatória',
            'fornecedor.required' => 'O fornecedor é obrigatório',
            'quantidade.required' => 'A quantidade é obrigatória',
        ];
    }
}
