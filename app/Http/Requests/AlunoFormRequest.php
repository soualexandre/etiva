<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AlunoFormRequest extends FormRequest
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
            'nome' => 'required|max:255',
            'numero_matricula' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.max' => 'O campo nome deve ter no máximo 255 carcteres',
            'numero_matricula.required' => 'O campo nome é obrigatório',
            'nomnumero_matriculae.numeric' => 'O campo numero de matrícula deve ser do tipo numerico',
        ];
    }
}
