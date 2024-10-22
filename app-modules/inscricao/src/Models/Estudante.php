<?php

namespace Modules\Inscricao\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estudante extends Model
{
    //
    public function turma():BelongsTo{
        return $this->belongsTo(Turma::class);
    }
}
