<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('posts', [PostController::class, 'getData'])->name('posts.getData');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::put('{id}/edit', [PostController::class, 'update'])->name('posts.update');


//test
// Route::middleware(['auth'])->group(function () {
//     Route::post('posts', [PostController::class, 'store'])->name('posts.store');
// });
// Route::middleware('auth')->prefix('posts')->name('posts.')->group(function () {
//     Route::get('/', [PostController::class, 'getData'])->name('posts.getData');
//     Route::post('/', [PostController::class, 'store'])->name('posts.store');
// });
