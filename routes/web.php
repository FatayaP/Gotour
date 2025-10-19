<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\GayaFotoController;

Route::get('/foto', [GayaFotoController::class, 'index']);

use App\Http\Controllers\DestinasiController;

Route::get('/destinasi', [DestinasiController::class, 'populer']);

use App\Http\Controllers\PaketWisataController;

Route::get('/paket', [PaketWisataController::class, 'index']);

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);