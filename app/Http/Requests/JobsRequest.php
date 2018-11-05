<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsRequest extends FormRequest
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
            'title' => 'required|min:3',
            'description' => 'required',
            'local' => 'required',
            'remote' => 'required',
            'type' => 'required',
            'company_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Por favor, preencha o campo Nome da Vaga.',
            'title.min' => 'Por favor, informe um Nome da vaga de no mínimo :min caracteres.',
            'description.required' => 'Por favor, preencha o campo de description.',
            'local.required' => 'Por favor, preencha o campo de local.',
            'type.required' => 'Por favor, preencha o campo de tipo.',
            'company_id.required' => 'Por favor, preencha o campo de id da empresa.',
        ];
    }
}
