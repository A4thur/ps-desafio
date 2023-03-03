<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
            'nome' => ['required', 'min:3', 'max:100'],
            'descricao' => ['required', 'min:3', 'max:149'],
            'preco' => ['required', 'min:0.01', 'max:100000'],
            'quantidade' => ['required', 'min:1', 'max:10000'],
            'imagem' => 'mimes:jpg,png,jpeg'
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => "O campo nome é obrigatório!",
            'nome.max' => "O campo deve ter no máximo 100 caractéres!",
            'nome.min' => "O campo nome deve ter no mínimo 3 caractéres!",
            'descricao.required' => "O campo descrição é obrigatório!",
            'descricao.max' => "O campo deve ter no máximo 149 caractéres",
            'descricao.min' => "O campo descrição deve ter no mínimo 3 caractéres!",
            'preco.required' => "O campo preço é obrigatório!",
            'preco.max' => "O campo deve ter no máximo R$100000!",
            'preco.min' => "O campo preço deve ter no mínimo R$0.01!",
            'quantidade.required' => "O campo quantidade é obrigatório!",
            'quantidade.max' => "O campo deve ter no máximo 100000 produtos!",
            'quantidade.min' => "O campo quantidade deve ter no mínimo 1 produto!",
            'imagem' => "A imagem deve ser do tipo JPEG ou JPG!"
        ];
    }
}
