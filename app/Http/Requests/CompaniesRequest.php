<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required',
            'website' => 'required',
            'logo' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Por favor, preencha o campo Nome da empresa.',
            'name.min' => 'Por favor, informe um Nome da empresa de no mínimo :min caracteres.',
            'email.required' => 'Por favor, preencha o campo de Email.',
            'website.required' => 'Por favor, preencha o campo de website.',
            'logo.required' => 'Por favor, preencha o campo de logo.',
        ];
    }
}
