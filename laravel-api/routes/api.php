<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ClienteController;
use App\Http\Controllers\Api\v1\FaturaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

//  api/vi
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\v1'], function(){
    Route::apiResource('cliente', ClienteController::class);
    Route::apiResource('fatura', FaturaController::class);
});