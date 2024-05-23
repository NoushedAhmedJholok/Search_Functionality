<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('index');
Route::post('/post/add', [PostController::class, 'postadd'])->name('postadd');
// Route::get('/search', [PostController::class, 'search'])->name('search');
