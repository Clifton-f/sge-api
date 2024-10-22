<?php

namespace Modules\Papel\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Papel\Models\Papel;
use Modules\Papel\Models\PapelPermissao;
use Modules\Papel\Http\Resources\PapelCollection;
use Modules\Papel\Http\Resources\PapelResource;
use Modules\Papel\Http\Requests\PapelRequest;

class PapelController
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return new PapelCollection(Papel::all());
    }
    public function store(PapelRequest $request){

        $campos = $request->validated();
       $papel=Papel::create([
            "nome"=>$campos['nome'],
            "descricao"=>$campos['descricao']
        ]);
        $permissoes = $campos['permissoes'];
        $papelPermissao=[];

        foreach($campos['permissoes'] as $permissao){
            
        $papelPermissao[]=PapelPermissao::create([
            "papel_id"=>$papel->id,
            "permissao_id"=>$permissao
        ]);
            
        }
        return new PapelResource($papel);

    }
    public function update(){
        //return new PapelResource($Papel);
    }
    public function show(int $id){
        //return Papel::where('id',$id)->first();
        return new PapelResource(Papel::where('id',$id)->first());
    }
    public function destroy(Papel $papel){
        return Papel::where('id',$papel->id)->delete();

    }
}
