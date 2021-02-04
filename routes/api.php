<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;
use App\Models\Provinsi;
use App\Models\Rw;
use App\Models\Kasus;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Provinsi
Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::post('provinsi/store', [ProvinsiController::class, 'store']);
Route::get('provinsi/{id?}', [ProvinsiController::class, 'show']);
Route::put('provinsi/update/{id?}',[ProvinsiController::class, 'update']);
Route::delete('provinsi/{id?}',[ProvinsiController::class, 'destroy']);

// API
// index
Route::get('index', [ApiController::class, 'index']);
// Rekap Perhari
Route::get('perdays',[ApiController::class, 'day']);
// Rekap Semua Provinsi
Route::get('alldata', [ApiController::class, 'all']);
// Lihat Data Berdasarkan ID
Route::get('view/{id?}', [ApiController::class, 'show']);