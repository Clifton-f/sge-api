<?php

namespace Modules\Docente\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //

    protected $fillable = [
        "curso_id",
        "cadeira_id",
        "ano",
        "estudante_id",
        "nome_avaliacao",  #Por enquanto mandamos todas avaliacoes de um estudante para cadeira
        "nota",
        'peso'
    ];

    protected $table = 'avaliacao_nota'; #TODO nome da tabela foi alterado na ultima versao

    function estudante(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Estudante::class, 'id');
    }
    function   avaliacao(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Avaliacao::class);
    }
}
