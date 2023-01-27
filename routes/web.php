<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livros', [BooksController::class, 'index']);
Route::get('/livros/criar', [BooksController::class, 'create'])->middleware('auth');
Route::post('/livros', [BooksController::class, 'store'])->middleware('auth');
Route::get('/livros/{id}', [BooksController::class, 'show']);
Route::get('/dashboard', [ReservationController::class, 'dashboard']);
Route::get('/livros/reserva/{id}', [ReservationController::class, 'create'])->middleware('auth');
Route::post('/livros/reserva', [ReservationController::class, 'store'])->middleware('auth');
