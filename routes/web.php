<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DersController;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/posts', [PostsController::class, 'index']);
//Route::post('/posts', [PostsController::class, 'store']);
//Route::get('/posts/create', [PostsController::class, 'create']);
//Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);
//Route::put('/posts/{post}', [PostsController::class, 'update']);
//Route::delete('/posts/{post}', [PostsController::class, 'destroy']);


Route::get('/ders', [DersController::class, 'index']);
Route::post('/ders', [DersController::class, 'store']);
Route::get('/ders/create', [DersController::class, 'create']);
Route::get('/ders/{ders}/edit', [DersController::class, 'edit']);
Route::put('/ders/{ders}', [DersController::class, 'update']);
Route::delete('/ders/{ders}', [DersController::class, 'destroy']);