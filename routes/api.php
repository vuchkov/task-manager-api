<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\JWTAuthController;
//use App\Http\Middleware\JwtMiddleware;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});*/

/*Route::post('register', [JWTAuthController::class, 'register']);
Route::post('login', [JWTAuthController::class, 'login']);

Route::middleware([JwtMiddleware::class])->group(function () {
    Route::get('user', [JWTAuthController::class, 'getUser']);
    Route::post('logout', [JWTAuthController::class, 'logout']);
});

Route::group(['middleware' => ['auth:api']], function () {
    Route::post('/tasks', [TaskController::class, 'store']);
    Route::get('/tasks', [TaskController::class, 'index']);
    Route::put('/tasks/{id}', [TaskController::class, 'update']);
});*/

/*Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});*/

Route::controller(TaskController::class)->group(function () {
    Route::get('tasks', 'index');
    Route::post('tasks', 'store');
    //Route::get('tasks/{id}', 'show');
    Route::put('tasks/{id}', 'update');
    //Route::delete('tasks/{id}', 'destroy');
});
