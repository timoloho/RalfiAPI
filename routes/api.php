<?php

use App\Http\Controllers\DiscController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/disc', [DiscController::class, 'index']);
Route::post('/disc', [DiscController::class, 'store']);
Route::get('/disc/{disc}', [DiscController::class, 'show']);
Route::put('/disc/{disc}', [DiscController::class, 'update']);
Route::delete('/disc/{disc}', [DiscController::class, 'destroy']);

