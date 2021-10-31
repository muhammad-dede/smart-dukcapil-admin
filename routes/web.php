<?php

use App\Http\Controllers\Application\BerandaController;
use App\Http\Controllers\Application\ChatController;
use App\Http\Controllers\Application\LayananController;
use App\Http\Controllers\Application\PengajuanController;
use App\Http\Controllers\Application\PersyaratanController;
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

    // Master Data
    Route::get('/user/data', [UserController::class, 'data'])->name('user.data');
    Route::resource('user', UserController::class)->except(['show']);
    Route::resource('layanan', LayananController::class)->only(['index', 'show', 'destroy']);
    Route::group(['prefix' => 'persyaratan', 'as' => 'persyaratan.'], function () {
        Route::get('/{id_layanan}', [PersyaratanController::class, 'index'])->name('index');
        Route::get('/create/{id_layanan}', [PersyaratanController::class, 'create'])->name('create');
        Route::put('/store/{id_layanan}', [PersyaratanController::class, 'store'])->name('store');
        Route::get('/edit/{id_persyaratan}', [PersyaratanController::class, 'edit'])->name('edit');
        Route::put('/update/{id_persyaratan}', [PersyaratanController::class, 'update'])->name('update');
        Route::put('/status/{id_persyaratan}', [PersyaratanController::class, 'status'])->name('status');
    });

    // Pengajuan
    Route::get('/pengajuan/data', [PengajuanController::class, 'data'])->name('pengajuan.data');
    Route::put('/pengajuan/status/{id}/{status}', [PengajuanController::class, 'status'])->name('pengajuan.status');
    Route::resource('pengajuan', PengajuanController::class);

    // Chat
    Route::group(['prefix' => 'chat', 'as' => 'chat.'], function () {
        Route::get('/', [ChatController::class, 'index'])->name('index');
    });
});
