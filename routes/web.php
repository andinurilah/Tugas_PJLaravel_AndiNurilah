<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pegawai', PegawaiController::class);
// Route::get('pegawai/search', [PegawaiController::class, 'search'])->name('pegawai.search');
