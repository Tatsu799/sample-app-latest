<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route::get('{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::get('{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('{id}/edit', [PostController::class, 'update'])->name('posts.update');
Route::delete('{id}/edit', [PostController::class, 'delete'])->name('posts.delete');
// Route::patch('{id}/edit', [PostController::class, 'back'])->name('posts.back');

require __DIR__ . '/auth.php';
