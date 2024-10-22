<?php

use Illuminate\Support\Facades\Route;
use \Modules\TesteModule\Http\Controllers\TesteController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teste',[TesteController::class,'index']);
