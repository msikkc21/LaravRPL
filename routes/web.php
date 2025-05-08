<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LlamaController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use PgSql\Lob;

Route::get('/', [dashboardController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/ask-llama', [LlamaController::class, 'ask']);
Route::get('/chatbot', function () {
    return view('chatbot');
});
Route::get('/react', function () {
    return view('react');
});
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);
Route::get('/products/{id}', [ProductController::class, 'show']);
