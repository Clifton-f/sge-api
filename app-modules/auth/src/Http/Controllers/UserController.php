<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Auth\Http\Requests\UserRequest;
use Modules\Auth\Http\Resources\UserCollection;
use Modules\Auth\Http\Resources\UserResource;
use Modules\Auth\Models\User;
use Modules\Auth\Models\Papel;

class UserController
{
    //
    public function index()
    {
        //return view('auth::index');
        return new UserCollection(User::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show(User $user){


        return new UserResource($user);

    }
    public function store(UserRequest $request){


        $campos=$request->validated();
        
        
        return new UserResource(User::create($campos));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
    public function edit(UserRequest $request){

    }
}
