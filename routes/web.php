<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;


Route::get('/home', [PostController::class, 'index'])->name('home.index');
Route::get('/admin/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/home', [PostController::class, 'store'])->name('home.store');

// Route::get('/contact', [MainController::class, 'renderContact']);
