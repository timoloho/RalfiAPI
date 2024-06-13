<?php

use App\Http\Controllers\BmwController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/bmw', [BmwController::class, 'index']);
Route::post('/bmw', [BmwController::class, 'store']);
Route::get('/bmw/{bmw}', [BmwController::class, 'show']);
Route::put('/bmw/{bmw}', [BmwController::class, 'update']);
Route::delete('/bmw/{bmw}', [BmwController::class, 'destroy']);

