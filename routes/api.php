<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\CompaniaController;
use App\Http\Controllers\Api\V1\PersonalController;
use App\Http\Controllers\Api\V1\ResolucionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/v1/login', [AuthController::class, 'login']);
Route::post('/v1/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Modulo Compañia
    |--------------------------------------------------------------------------
    */
    Route::prefix('v1/companias')
        ->controller(CompaniaController::class)
        ->group(function () {
            Route::get('/', 'obtenerCompanias');
            Route::get('/obtenerConPaginacion', 'obtenerConPaginacion');
            Route::get('/{compania}', 'obtenerCompania');
        });

    /*
    |--------------------------------------------------------------------------
    | Modulo Personal
    |--------------------------------------------------------------------------
    */
    Route::prefix('v1/personales')
        ->controller(PersonalController::class)
        ->group(function () {
            Route::get('/', 'obtenerPersonales');
            Route::get('/obtenerConPaginacion', 'obtenerConPaginacion');
            Route::get('/obtenerPorDocumento/{documeto}', 'obtenerPorDocumento');
            Route::get('/obtenerPorCodigo/{codigo}', 'obtenerPorCodigo');
        });

    /*
    |--------------------------------------------------------------------------
    | Modulo Resolución
    |--------------------------------------------------------------------------
    */
    Route::prefix('v1/resoluciones')
    ->controller(ResolucionController::class)
    ->group(function () {
        Route::get('/cantidad', 'cantidad');
        Route::get('/cantidadPorDiaSemanaMesAnho', 'cantidadPorDiaSemanaMesAnho');
    });
});
