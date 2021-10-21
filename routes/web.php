<?php

use App\Http\Controllers\Aplikasi\BerandaController;
use App\Http\Controllers\Application\ProfilController;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [BerandaController::class, 'index'])->name('beranda');
    Route::group(['prefix' => 'profil', 'as' => 'profil.'], function () {
        Route::get('/', [ProfilController::class, 'index'])->name('index');
        Route::post('/update/{form}', [ProfilController::class, 'update'])->name('update');
    });
});
