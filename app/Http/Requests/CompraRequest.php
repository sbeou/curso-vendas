<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompraRequest extends FormRequest
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
           'fornecedor' => 'required',
           'dataCompra' => 'required',
           'produto' => ['required' , 'array'],
           'quantidade' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fornecedor.required' => 'O fornecedor é obrigatório',
            'dataCompra.required' => 'A data de compra é obrigatória',
            'produto.required' => 'O produto é obrigatório',
            'produto.array' => 'O produto está errado',
            'quantidade.required' => 'A quantidade é obrigatória',
        ];
    }
}
