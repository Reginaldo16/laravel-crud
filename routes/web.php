<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/post/create',[PostController::class ,'create']);

Route::get('/', function () {
    return view('welcome');
});
