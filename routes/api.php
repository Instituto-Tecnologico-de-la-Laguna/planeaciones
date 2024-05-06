<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PlaneacionesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1/materias')->group(function(){
    Route::get('/',[ PlaneacionesController::class,'getMaterias']);
    Route::post('/',[ PlaneacionesController::class,'createMaterias']);
    Route::get('/{id}',[ PlaneacionesController::class,'getByIdMaterias']);
    Route::put('/{id}',[ PlaneacionesController::class,'updateMaterias']);
    Route::delete('/{id}',[ PlaneacionesController::class,'deleteMaterias']);

});

Route::prefix('v1/docentes')->group(function(){
    Route::get('/',[ PlaneacionesController::class,'getDocentes']);
    Route::post('/',[ PlaneacionesController::class,'createDocentes']);
    Route::get('/{id}',[ PlaneacionesController::class,'getByIdDocentes']);
    Route::put('/{id}',[ PlaneacionesController::class,'updateDocentes']);
    Route::delete('/{id}',[ PlaneacionesController::class,'deleteDocentes']);
});

Route::prefix('v1/departamentos')->group(function(){
    Route::get('/',[ PlaneacionesController::class,'getDepartamentos']);
    Route::post('/',[ PlaneacionesController::class,'createDepartamentos']);
    Route::get('/{id}',[ PlaneacionesController::class,'getByIdDepartamentos']);
    Route::put('/{id}',[ PlaneacionesController::class,'updateDepartamentos']);
    Route::delete('/{id}',[ PlaneacionesController::class,'deleteDepartamentos']);
});

Route::prefix('v1/carreras')->group(function(){
    Route::get('/',[ PlaneacionesController::class,'getCarreras']);
    Route::post('/',[ PlaneacionesController::class,'createCarreras']);
    Route::get('/{id}',[ PlaneacionesController::class,'getByIdCarreras']);
    Route::put('/{id}',[ PlaneacionesController::class,'updateCarreras']);
    Route::delete('/{id}',[ PlaneacionesController::class,'deleteCarreras']);
});