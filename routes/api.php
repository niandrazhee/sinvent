<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KategoriApiController;
use App\Http\Controllers\Api\BarangApiController;
use App\Http\Controllers\Api\BarangMasukApiController;
use App\Http\Controllers\Api\BarangKeluarApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('kategori',[KategoriController::class, 'getAPIKategori']);
// Route::post('kategori', [KategoriController::class, 'createAPIKategori']);
// Route::get('kategori/{id}',[KategoriController::class, 'showAPIKategori']);
// Route::delete('kategori/{id}',[KategoriController::class, 'deleteAPIKategori']);
// Route::put('kategori/{id}',[KategoriController::class, 'updateAPIKategori']);

//Menampilkan api kategori dengan method : apiResource pada class KategoriApiController
Route::apiResource('kategori', KategoriApiController::class);
