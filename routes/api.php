<?php

use App\Http\Controllers\Api\CompaniaController;
use App\Http\Controllers\Api\PersonalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1/companias')
    ->controller(CompaniaController::class)
    ->group(function () {
        Route::get('/', 'obtenerCompanias');
        Route::get('/obtenerConPaginacion', 'obtenerConPaginacion');
        Route::get('/{compania}', 'obtenerCompania');
    });

Route::prefix('v1/personales')
    ->controller(PersonalController::class)
    ->group(function () {
        Route::get('/', 'obtenerPersonales');
        Route::get('/obtenerConPaginacion', 'obtenerConPaginacion');
        Route::get('/obtenerPorDocumento/{documeto}', 'obtenerPorDocumento');
        Route::get('/obtenerPorCodigo/{codigo}', 'obtenerPorCodigo');
    });
