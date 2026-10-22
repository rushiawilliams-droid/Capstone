<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/portfolios', [PortfolioController::class, 'manage']);
Route::get('/create', [PortfolioController::class, 'create']);
Route::post('/store', [PortfolioController::class, 'store']);
Route::get('/select-template/{id}', [PortfolioController::class, 'selectTemplate']);
Route::post('/update-template/{id}', [PortfolioController::class, 'updateTemplate']);
Route::get('/preview/{id}', [PortfolioController::class, 'preview']);
Route::get('/edit/{id}', [PortfolioController::class, 'edit']);
Route::post('/update/{id}', [PortfolioController::class, 'update']);
Route::delete('/delete/{id}', [PortfolioController::class, 'destroy']);