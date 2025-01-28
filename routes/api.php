<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api');
    Route::post('/profile', [AuthController::class, 'profile'])->middleware('auth:api');
});

Route::controller(TaskController::class)->group(function () {
    Route::post('tasks', 'store');
    Route::get('tasks', 'index');
    Route::get('tasks/{id}', 'show');
    Route::put('tasks/{id}', 'update');
    Route::delete('tasks/{id}', 'destroy');
});
