<?php

namespace Modules\Docente\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    //
    protected $table = "avaliacoes";
    protected $fillable = [
        'curso_id',
        'cadeira_id',
        'ano',
        'nome_avaliacao',
        'peso'
    ];
}
