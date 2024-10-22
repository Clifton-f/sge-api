<?php

namespace Modules\Matricula\Models;

use Illuminate\Database\Eloquent\Model;

class Papel extends Model
{
    //
    protected $fillable = [
        'id',
        'nome',
        'descricao'
    ];
    protected $table = 'papeis';
}
