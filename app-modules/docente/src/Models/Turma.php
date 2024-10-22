<?php

namespace Modules\Docente\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Turma extends Model
{
    //
    protected $table = 'turmas';

    protected $fillable = [
        'curso_id',
        'cadeira_id',
        'ano',
        'regente_id'
    ];

    public function docente():BelongsTo
    {
        return $this->belongsTo(Docente::class,'regente_id');
    }
}
