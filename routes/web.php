<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

// Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// BooksController
Route::get('/livros', [BooksController::class, 'index']);
Route::get('/livros/criar', [BooksController::class, 'create'])->middleware('auth');
Route::post('/livros', [BooksController::class, 'store'])->middleware('auth');
Route::get('/livros/{id}', [BooksController::class, 'show']);

// ReservationCotroller
Route::get('/dashboard', [ReservationController::class, 'dashboard'])->middleware('auth');
Route::get('/livros/reserva/{id}', [ReservationController::class, 'create'])->middleware('auth');
Route::post('/livros/reserva', [ReservationController::class, 'store'])->middleware('auth');
