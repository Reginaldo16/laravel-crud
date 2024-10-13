<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/post/create',[PostController::class ,'create']);
Route::get('/post/find',[PostController::class,'findAll']);

Route::get('/', function () {
    return view('welcome');
});
