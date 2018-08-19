<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendaRequest extends FormRequest
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
           'cliente' => 'required',
           'dataVenda' => 'required',
           'produto' => ['required' , 'array'],
           'quantidade' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cliente.required' => 'O cliente é obrigatório',
            'dataVenda.required' => 'A data de venda é obrigatória',
            'produto.required' => 'O produto é obrigatório',
            'produto.array' => 'O produto está errado',
            'quantidade.required' => 'A quantidade é obrigatória',
        ];
    }
}
