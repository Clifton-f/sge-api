<?php

namespace Modules\Docente\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Docente extends Model
{
    //
    protected $table = 'docentes';

    function user(): BelongsTo {
        return $this->belongsTo(User::class, 'id');
    }
    function turma():HasMany{
        return $this->hasMany(Turma::class, 'regente_id');
    }


}
