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

Route::resource('/blog', PostsController::class);

// // GET
// Route::get('/blog', [PostsController::class, 'index']);
// Route::get('/blog/1', [PostsController::class, 'show']);
// // POST
// Route::get('/blog/create', [PostsController::class, 'create']);
// Route::post('/blog', [PostsController::class, 'store']);
// // PUT or PATCH
// Route::get('/blog/edit/1', [PostsController::class, 'edit']);
// Route::patch('/blog/1', [PostsController::class, 'update']);
// // DELETE
// Route::delete('/blog/1', [PostsController::class, 'destroy']);

Route::get('/', HomeController::class);

// Multiple HTTP verbs
//Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

//Route::view('/blog', 'blog.index', ['name' => 'Code with Dary']);
