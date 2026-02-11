<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DivisionController;
use App\Http\Controllers\Api\EmployeeController;

Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});

// non-login
Route::middleware('guest')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
});

// login
Route::middleware('auth:sanctum')->group(function () {
    // divisions
    Route::prefix('divisions')->group(function () {
        Route::get('/', [DivisionController::class, 'index']);
    });

    // employees
    Route::prefix('employees')->group(function () {
        Route::get('/', [EmployeeController::class, 'index']);
        Route::get('/{id}', [EmployeeController::class, 'show']);
        Route::post('/', [EmployeeController::class, 'store']);
        Route::put('/{id}', [EmployeeController::class, 'update']);
        Route::delete('/{id}', [EmployeeController::class, 'destroy']);
        Route::get('/total/count', [EmployeeController::class, 'count']);
        Route::get('/latest/5', [EmployeeController::class, 'latest']);
    });
});

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
