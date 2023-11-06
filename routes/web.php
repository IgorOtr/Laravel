<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;


//ROTA PARA REDIRECIONAR PARA A PÁGINA HOME;
Route::get('/', [PostController::class, 'redirectToHome']);

//ROTAS DO TIPO {GET} PARA LISTAR OS POSTS;
Route::get('/home', [PostController::class, 'index'])->name('home.index');
Route::get('/admin/post/create', [PostController::class, 'create'])->name('post.create');
Route::get('/show-details/{id}', [PostController::class, 'show'])->name('show-details.show');

//ROTAS DO TIPO {POST} PARA ENVIO DE DADOS;
Route::post('/home', [PostController::class, 'store'])->name('home.store');
