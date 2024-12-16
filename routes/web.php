<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//post
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

//edit
Route::get('{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('{id}/edit', [PostController::class, 'update'])->name('posts.update');
Route::delete('{id}/edit', [PostController::class, 'delete'])->name('posts.delete');

//like
Route::post('/posts/{id}/like', [LikeController::class, 'like'])->name('posts.like');
Route::delete('/posts/{id}/unlike', [LikeController::class, 'unlike'])->name('posts.unlike');

// Route::post('/posts/{id}/like', [LikeController::class, 'like'])->name('posts.like');
// Route::delete('/posts/{id}/unlike', [LikeController::class, 'unlike'])->name('posts.unlike');

require __DIR__ . '/auth.php';


//test
// Route::middleware('auth')->prefix('posts')->name('posts.')->group(function () {
//     Route::post('/', [PostController::class, 'store'])->name('posts.store');
// });
