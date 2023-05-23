<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', [App\Http\Controllers\Controller::class, "index"]);

Route::middleware(['auth:sanctum',
    config('jetstream.auth_session'),
    'verified'])->group(function () {
    Route::get('/dashboard',
        [App\Http\Controllers\Controller::class,
         "dashboard"])->name('dashboard');

    Route::get('/product', [App\Http\Controllers\ProductController::class, "show"])->name('product');
    Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, "edit"]);

    Route::get('/blogs', [App\Http\Controllers\BlogController::class, "index"])->name('blogs');
    Route::get('/blog', [App\Http\Controllers\BlogController::class, "index"])->name('blog');

    Route::get('/add-blog', [App\Http\Controllers\BlogController::class, "create"]);
    Route::post('/save-blog', [App\Http\Controllers\BlogController::class, "insert"]);
    Route::get('/blog-edit/{id}', [App\Http\Controllers\BlogController::class, "edit"]);
    Route::post('/blog-update/{id}', [App\Http\Controllers\BlogController::class, "update"]);
    Route::get('delete/{id}', [App\Http\Controllers\BlogController::class, "delete"]);
});