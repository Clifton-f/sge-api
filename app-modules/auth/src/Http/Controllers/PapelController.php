<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Auth\Http\Requests\StorePapelRequest;
use Modules\Auth\Http\Requests\UpdatePapelRequest;
use Modules\Auth\Models\papel;
use Modules\Papel\Http\Resources\PapelCollection;

class PapelController
{
    //
    public function index()
    {
        //
        $response= new PapelCollection();
        return $response;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePapelRequest $request)
    {
        //
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Papel $papel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Papel $papel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePapelRequest $request, Papel $papel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Papel $papel)
    {
        //
    }
}
