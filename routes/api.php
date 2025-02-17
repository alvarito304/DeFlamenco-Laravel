<?php

use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\EventosApiController;
use App\Http\Controllers\Api\TicketController;
use App\Http\Controllers\EmpresaControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/ticket', TicketController::class);
Route::apiResource('clientes', ClienteController::class);
Route::apiResource('usuarios',\App\Http\Controllers\Api\UserController::class);

Route::apiResource('eventos', EventosApiController::class);
Route::get('eventos/nombre/{nombre}', [EventosApiController::class, 'getByNombre']);

Route::apiResource('empresas',EmpresaControllerApi::Class);
Route::get('empresas',[EmpresaControllerApi::class, 'getAll']);
Route::get('empresas/{id}', [EmpresaControllerApi::class, 'getById']);
Route::get('empresas/nombre/{nombre}', [EmpresaControllerApi::class, 'getByNombre']);
Route::get('empresas/cif/{cif}', [EmpresaControllerApi::class,'getByCif']);
Route::post('empresas',[EmpresaControllerApi::class, 'create']);
Route::put('empresas/{id}', [EmpresaControllerApi::class, 'update']);
Route::delete('empresas/{id}', [EmpresaControllerApi::class, 'delete']);
