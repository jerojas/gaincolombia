<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearAsistentesRequest extends FormRequest
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
        return [
            'asistente_id' => 'required',
            'first_name' => 'required',
            'last_name ' => 'required',
            'email' => 'required',
            'document' => 'required'
        ];
    }

    public function messages()
{
    return [
        'asistente_id.required' => 'El código de asistente es obligatorio',
        'first_name.required' => 'El nombre es obligatorio',
    ];
}
}
