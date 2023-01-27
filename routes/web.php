<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livros', [BooksController::class, 'index']);
Route::get('/livros/criar', [BooksController::class, 'create'])->middleware('auth');
Route::post('/livros', [BooksController::class, 'store']);
Route::get('/livros/{id}', [BooksController::class, 'show']);
// Route::get('/dashboard', []) ## Aula 28 - Matheus Battisti

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
