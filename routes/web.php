<?php

use App\Http\Controllers\Application\BerandaController;
use App\Http\Controllers\Application\ChatController;
use App\Http\Controllers\Application\PengajuanController;
use App\Http\Controllers\Application\ProfilController;
use App\Http\Controllers\Application\UserController;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [BerandaController::class, 'index'])->name('beranda');
    Route::group(['prefix' => 'profil', 'as' => 'profil.'], function () {
        Route::get('/', [ProfilController::class, 'index'])->name('index');
        Route::post('/update/{form}', [ProfilController::class, 'update'])->name('update');
    });
    // User
    Route::get('/user/data', [UserController::class, 'data'])->name('user.data');
    Route::resource('user', UserController::class)->except('show');
    // Pengajuan
    Route::get('/pengajuan/data', [PengajuanController::class, 'data'])->name('pengajuan.data');
    Route::put('/pengajuan/status/{id}/{status}', [PengajuanController::class, 'status'])->name('pengajuan.status');
    Route::resource('pengajuan', PengajuanController::class);
    // Chat
    Route::group(['prefix' => 'chat', 'as' => 'chat.'], function () {
        Route::get('/', [ChatController::class, 'index'])->name('index');
    });
});
