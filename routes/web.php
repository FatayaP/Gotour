<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\GayaFotoController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/destinasi', [DestinasiController::class, 'populer'])->name('destinasi.populer');

Route::get('/paket', [PaketWisataController::class, 'index'])->name('paket.wisata');

Route::get('/foto', [GayaFotoController::class, 'index'])->name('rekomendasi.foto');

