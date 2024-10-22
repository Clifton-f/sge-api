<?php

namespace Modules\Matriculas\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Matricula\Models\Estudante;

class User extends Model
{
    //

    protected $fillable = [
        'nome',
        'id',
        'email',
        'password',
        'BI',
        'NUIT',
        'contacto_1',
        'contacto_2',
        'papel_id'


    ];
    protected $table='users';


    public function estudante(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Estudante::class);
    }
}
