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
    Route::get('/',[ PlaneacionesController::class,'get']);
    Route::post('/',[ PlaneacionesController::class,'create']);
    Route::get('/{id}',[ PlaneacionesController::class,'getById']);
    Route::put('/{id}',[ PlaneacionesController::class,'update']);
    Route::delete('/{id}',[ PlaneacionesController::class,'delete']);

});