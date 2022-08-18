<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;


// List artigos
Route::get('clientes', [ClientesController::class, 'index']);

// List single artigo
Route::get('cliente/{id}', [ClientesController::class, 'show']);

// Create new artigo
Route::post('cliente', [ClientesController::class, 'store']);

// Update artigo
Route::put('cliente/{id}', [ClientesController::class, 'update']);

// Delete artigo
Route::delete('cliente/{id}', [ClientesController::class,'destroy']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


