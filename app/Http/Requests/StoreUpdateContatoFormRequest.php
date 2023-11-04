<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateContatoFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    { 
        $rules = [
            'name' => 'required|string|max:255|min:3',
            'ramal' => [
                'required',
                'string',
                'max:4',
                'min:4',
                Rule::unique('contatos')->ignore($this->id, 'id'),

            ],
            'coordenacao' => 'required|string|max:30|min:2'
        ];
    
        return $rules;
    }
}
