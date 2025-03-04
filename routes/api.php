<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\CompaniaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/v1/login', [AuthController::class, 'login']);
Route::post('/v1/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('v1/companias')
        ->controller(CompaniaController::class)
        ->group(function () {
            Route::get('/', 'obtenerCompanias');
            Route::get('/obtenerConPaginacion', 'obtenerConPaginacion');
            Route::get('/{compania}', 'obtenerCompania');
        });
});
