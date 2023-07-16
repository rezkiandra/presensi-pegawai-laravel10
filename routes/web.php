<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PresensiController;
use App\Models\Pegawai;
use App\Models\Presensi;

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('about', 'about');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'authenticate')->name('login');
    Route::get('logout', 'logout')->middleware('auth');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'store');
});

Route::controller(AdminPagesController::class)->middleware('auth')->prefix('admin')->group(function () {
    Route::get('pegawai', 'pegawai');
    Route::get('presensi', 'presensi');
    Route::get('user', 'user');
});

Route::middleware('auth')->group(function () {
    Route::resource('admin', AdminController::class);
});

Route::middleware('auth')->prefix('pegawai')->group(function () {
    Route::resource('presensi', PresensiController::class);
});

Route::controller(PegawaiController::class)->middleware('auth')->prefix('pegawai')->group(function () {
    Route::get('/', 'index');
    Route::get('create', 'create')->name('pegawai.create');
    Route::post('create', 'store');
    Route::get('edit/{id}', 'edit')->name('pegawai.edit');
    Route::put('edit/{id}', 'update')->name('pegawai.update');
    Route::delete('delete/{id}', 'destroy');
});