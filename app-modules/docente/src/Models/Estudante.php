<?php

namespace Modules\Docente\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Mockery\Matcher\Not;

class Estudante extends Model
{
    //
    protected $table = 'estudantes';

    protected $fillable = [
        'numero_estundante',
        'id',
        'curso_id',
        'data_entrada',
        'data_saida'
    ];

    function user(): BelongsTo {
        return $this->belongsTo(User::class, 'id');
    }
    function nota():HasMany{
        return $this->hasMany(Nota::class);
    }

}