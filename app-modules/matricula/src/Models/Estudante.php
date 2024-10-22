<?php

namespace Modules\Matricula\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Matriculas\Models\Curso;
use Modules\Matriculas\Models\User;

class Estudante extends Model
{
    //
    protected $table="estudantes";
    protected $fillable=[
        'id',
        "numero_estudante",
        "data_entrada",
        "data_saida",
        "curso_id"
    ];
    public function curso(){
        return $this->belongsTo(Curso::class,"curso_id","id");
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class,'id','id');
    }
}
