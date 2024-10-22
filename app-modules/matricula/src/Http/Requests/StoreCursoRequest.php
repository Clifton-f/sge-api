<?php

namespace Modules\Matriculas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCursoRequest extends FormRequest
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
            "nome"=>"required",
            "duracao_minima"=>"required",
            "duracao_maxima"=>"required",
            "departamento_id"=>"required"
        ];
    }

    protected function prepareForValidation()
    {

        $this->merge([

            'departamento_id'=> $this->departamentoId,
            'duracao_maxima'=>$this->duracaoMaxima,
            'duracao_minima'=>$this->duracaoMinima

        ]);
    }
}
