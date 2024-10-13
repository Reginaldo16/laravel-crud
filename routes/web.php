<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/post/create',[PostController::class ,'create']);


Route::get('/post/find',[PostController::class,'findAll']);
Route::get('/post/findOne',[PostController::class,'find']);

Route::get('/post/update',[PostController::class,'update']);

Route::get('post/delete', [PostController::class, 'delete']);


Route::get('/', function () {
    return view('welcome');
});
