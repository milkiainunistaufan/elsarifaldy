<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChatController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::middleware('throttle:60,1')->group(function () {
    Route::get('/chats', [ChatController::class, 'index']);
    Route::post('/chat', [ChatController::class, 'store']);
});