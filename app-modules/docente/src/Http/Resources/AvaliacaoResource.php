<?php

namespace Modules\Docente\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Docente\Models\Cadeira;
use Modules\Docente\Models\Curso;

class AvaliacaoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $cadeira = Cadeira::where('id', 'nome')->where('id', $this->cadeira_id)->first();
        $curso = Curso::where('id', 'nome')->where('id', $this->curso_id)->first();
        return [
            'cadeira' => $cadeira,
            'curso' => $curso,
            'ano' => $this->ano,
            'avaliacao' => [
                'nota' => $this->nota,
                'peso' => $this->peso,
            ],
        ];
    }
}
