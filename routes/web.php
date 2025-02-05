<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;

use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth']);

Route::middleware(['auth'])->group(function () {
    Route::resource('kelas', KelasController::class);
Route::resource('guru', GuruController::class);
Route::resource('siswa', SiswaController::class);
});

Route::get('dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::get('/siswa/filter', [SiswaController::class, 'filter'])->name('siswa.filter');;
require __DIR__.'/auth.php';
