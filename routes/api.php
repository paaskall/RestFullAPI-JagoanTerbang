<?php

use App\Http\Controllers\Api\PenerbanganController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\AirlineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route Endpoints
Route::get('penerbangan', [PenerbanganController::class, 'index'])->middleware('auth:sanctum');
Route::get('penerbangan/destinationAirline', [PenerbanganController::class, 'getBySourceDestinationAndAirline'])->middleware('auth:sanctum');
// Route::get('penerbangan/destination-airline', [PenerbanganController::class, 'getByDestinationAndSource']);
// Route::get('penerbangan/destination-source', [PenerbanganController::class, 'getByDestinationAndSource']);

// New Routes for Cities and Airlines
Route::get('cities', [CityController::class, 'index'])->middleware('auth:sanctum');
Route::get('airlines', [AirlineController::class, 'index'])->middleware('auth:sanctum');


