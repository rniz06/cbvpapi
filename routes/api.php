<?php

use App\Http\Controllers\Api\CompaniaController;
use App\Http\Controllers\Api\PersonalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {

    // Grupo de Rutas Pertenecientes a companias
    Route::prefix('companias')->group(function () {

        // Obterner todas las companias
        Route::get('/', [CompaniaController::class, 'obtenerCompanias']);

        // Obterner todas las companias con paginacion
        Route::get('/obtenerConPaginacion', [CompaniaController::class, 'obtenerConPaginacion']);

        // Obterner Compania por parametro
        Route::get('/{compania}', [CompaniaController::class, 'obtenerCompania']);
    });

    // Grupo de Rutas Pertenecientes a Personales
    Route::prefix('personales')->group(function () {

        // Obterner todas las Perosnales
        Route::get('/', [PersonalController::class, 'obtenerPersonales']);

        // Obterner todas las companias con paginacion
        Route::get('/obtenerConPaginacion', [PersonalController::class, 'obtenerConPaginacion']);

        // Obterner Personal por Documento
        Route::get('/obtenerPorDocumento/{documeto}', [PersonalController::class, 'obtenerPorDocumento']);

        // Obterner Personal por codigo
        Route::get('/obtenerPorCodigo/{codigo}', [PersonalController::class, 'obtenerPorCodigo']);
    });
});
