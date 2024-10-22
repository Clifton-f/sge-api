<?php

namespace Modules\Docente\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Docente\Http\Resources\TurmaCollection;
use Modules\Docente\Models\Turma;

class TurmaController
{
    public function index(Request $request){
        return new TurmaCollection(Turma::where('regente_id',$request->input('regente_id'))->get());
    }

    // public function update(){
    //     //return new PapelResource(Papel)
    // }

    public function show(Request $request){
        $turma = Turma::where('curso_id',$request->input('curso_id'))->where('cadeira_id',$request->input('cadeira_id'))->where('ano',$request->input('ano'))->first();
        return new TurmaResource($turma);
    }
}
