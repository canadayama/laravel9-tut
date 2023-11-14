<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facades\Debugbar;

/*
    GET
    POST
    PUT
    PATCH
    DELETE
    OPTIONS
*/

//Route::resource('/blog', PostsController::class);

// GET
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/{id}', [PostsController::class, 'show'])->where('id', '[0-9]+');
//Route::get('/blog/{id}', [PostsController::class, 'show'])->whereNumber('id');
//Route::get('/blog/{name}', [PostsController::class, 'show'])->where('name', '[a-zA-Z]+');
//Route::get('/blog/{name}', [PostsController::class, 'show'])->whereAlpha('name');
// Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
//     ->where([
//         'id'=>'[0-9]+',
//         'name', '[a-zA-Z]+'
//     ]);
// Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
//     ->whereNumber('id')
//     ->whereAlpha('name');

// POST
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);
// PUT or PATCH
Route::get('/blog/edit/{id}', [PostsController::class, 'edit']);
Route::patch('/blog/{id}', [PostsController::class, 'update']);
// DELETE
Route::delete('/blog/{id}', [PostsController::class, 'destroy']);

Route::get('/', HomeController::class);

// Multiple HTTP verbs
//Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

//Route::view('/blog', 'blog.index', ['name' => 'Code with Dary']);
