<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
        $rules = Product::$rules;
        
        return $rules;
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser um texto.',
            'nome.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'descricao.string' => 'O campo descrição deve ser um texto.',
            'preco.required' => 'O campo preço é obrigatório.',
            'preco.numeric' => 'O campo preço deve ser um número.',
            'preco.min' => 'O campo preço deve ser maior ou igual a 0.',
            'quantidade.required' => 'O campo quantidade é obrigatório.',
            'quantidade.integer' => 'O campo quantidade deve ser um número inteiro.',
            'quantidade.min' => 'O campo quantidade deve ser maior ou igual a 1.',
            'category_id.required' => 'O campo categoria é obrigatório.',
            'category_id.exists' => 'A categoria selecionada não existe.',
        ];
    }
}
