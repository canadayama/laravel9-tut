<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FallbackController;

/*
    GET
    POST
    PUT
    PATCH
    DELETE
    OPTIONS
*/

//Route::resource('/blog', PostsController::class);

Route::prefix('/blog')->group(function() {
    Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
    Route::get('/{id}', [PostsController::class, 'show'])->where('id', '[0-9]+')->name('blog.show');
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::post('/', [PostsController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
});

Route::get('/', HomeController::class);

// Multiple HTTP verbs
//Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

//Route::view('/blog', 'blog.index', ['name' => 'Code with Dary']);

Route::fallback(FallbackController::class);