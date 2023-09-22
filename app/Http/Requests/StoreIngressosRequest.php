<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIngressosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'chaveIngresso' => 'min:2|max:50|unique:ingressos,chaveIngresso|required',
            'nomeEvento' => 'min:2|max:50|unique:ingressos,nomeEvento|required',
            'dataEmissao' => 'min:2|max:50|unique:dataEmissao|required',
            'cliente' => 'min:2|max:50|unique:ingressos,cliente|required',
            'metodoPagamento' => 'min:2|max:50|unique:ingressos,metodoPagamento|required',
            'valorCompra' => 'min:2|max:50|unique:ingressos,valorCompra|required',
        ];
    }
}
