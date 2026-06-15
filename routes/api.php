<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TicketController;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    Route::apiResource('events', EventController::class);

    Route::apiResource('events', EventController::class);

    Route::post(
        'events/{event}/tickets',
        [TicketController::class, 'store']
    );

    Route::get(
        'events/{event}/tickets',
        [TicketController::class, 'index']
    );
});
