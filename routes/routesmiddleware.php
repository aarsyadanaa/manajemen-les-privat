<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Umum\AuthController;
use App\Http\Controllers\Umum\RedirectController;
use App\Http\Controllers\Umum\SuperadminController;
use App\Http\Controllers\Umum\PicController;
use App\Http\Controllers\Umum\KaryawanController;

//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

// untuk superadmin dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2,3']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', [SuperadminController::class, 'index']);
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/pic', [PicController::class, 'index']);

});

Route::group(['middleware' => ['auth', 'checkrole:3']], function() {
    Route::get('/karyawan', [KaryawanController::class, 'index']);

});