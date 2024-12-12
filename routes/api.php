<?php

use App\Http\Controllers\Api\CompaniaController;
use App\Http\Controllers\Api\PersonalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    // Obterner todas las companias
    Route::get('/companias', [CompaniaController::class, 'obtenerCompanias']);

    // Obterner Compania por parametro
    Route::get('/compania/{compania}', [CompaniaController::class, 'obtenerCompania']);

    // Obterner todas las Perosnales
    Route::get('/personales', [PersonalController::class, 'obtenerPersonales']);
});
