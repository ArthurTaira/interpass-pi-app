<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nomeEvento" => 'min:2|max:50|unique:evento,nomeEvento|required',
            "dataEvento" => 'min:2|max:50|unique:evento,dataEvento|required',
            "localEvento" => 'min:2|max:50|unique:evento,dataEvento|required',
            "qtIngresos" => 'min:2|max:50|unique:evento,dataEvento|required',
        ];
    }
}
