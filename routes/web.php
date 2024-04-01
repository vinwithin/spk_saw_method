<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PageController;
use App\Models\Alternatif;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [PageController::class, 'index']);
Route::get('/nilai', [NilaiController::class, 'index']);
Route::get('/kriteria', [KriteriaController::class, 'index']);
Route::get('/alternatif', [AlternatifController::class, 'index']);