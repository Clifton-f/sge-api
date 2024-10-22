<?php

namespace Modules\Papel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permissao extends Model
{
    //
    protected $table='permissoes';

    protected $fillable = [
        'id',
        'nome',
        'descricao'
    ];

    public function papelPermissao():HasMany{

        return $this->hasMany(PapelPermissao::class,'permissao_id','id');
    }
    public function papel():BelongsToMany{
        return $this->belongsToMany(Papel::class,'papel_permissao','permissao_id','papel_id');
    }
}
