<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [MainController::class, 'index'])->name('home.index');

// Route::get('/contact', [MainController::class, 'renderContact']);
