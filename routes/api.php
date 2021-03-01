<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;
use App\Models\Provinsi;
use App\Models\Rw;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\kota;
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

// API Global 
Route::get('/global', [ApiController::class, 'global']);
// API Negara
Route::get('perdays', [ApiController::class, 'day']);
Route::get('alldata', [ApiController::class, 'all']);
Route::get('view/{id?}', [ApiController::class, 'show']);
Route::get('index', [ApiController::class, 'provinsi']);
Route::get('kota', [ApiController::class, 'kota']);
Route::get('viewkota/{id?}', [ApiController::class, 'showkota']);
Route::get('kecamatan', [ApiController::class, 'kecamatan']);
Route::get('viewkecamatan/{id?}', [ApiController::class, 'showkec']);
Route::get('kelurahan', [ApiController::class, 'kelurahan']);
Route::get('viewkelurahan/{id?}', [ApiController::class, 'showkel']);
Route::get('rw', [ApiController::class, 'rw']);
Route::get('viewrw/{id?}', [ApiController::class, 'showrw']);
