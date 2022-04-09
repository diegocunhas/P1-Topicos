<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomRequest extends FormRequest
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
            'nome' => 'required|max50',
            'capacidade' => 'required|max3',
            'tipo' => 'required|max10'
        ];
    }

    public function messages(){
        return [
            'nome.*' => 'Nome obrigatório máximo 50 caracteres',
            'capacidade.*' => 'Capacidade obrigatório máximo 3 digitos',
            'tipo.*' => 'Tipo obrigatório máximo 10 caracteres'
        ];
    }
}
