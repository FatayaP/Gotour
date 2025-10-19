<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\GayaFotoController;

Route::get('/rekomendasi-foto', [GayaFotoController::class, 'index']);

use App\Http\Controllers\DestinasiController;

Route::get('/destinasi-populer', [DestinasiController::class, 'populer']);