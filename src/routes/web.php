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
// Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');
// Route::get('/blog/{id}', [PostsController::class, 'show'])->where('id', '[0-9]+')->name('blog.show');

// // POST
// Route::get('/blog/create', [PostsController::class, 'create'])->name('blog.create');
// Route::post('/blog', [PostsController::class, 'store'])->name('blog.store');
// // PUT or PATCH
// Route::get('/blog/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
// Route::patch('/blog/{id}', [PostsController::class, 'update'])->name('blog.update');
// // DELETE
// Route::delete('/blog/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');

Route::get('/', HomeController::class);

// Multiple HTTP verbs
//Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

//Route::view('/blog', 'blog.index', ['name' => 'Code with Dary']);
