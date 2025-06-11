<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicReporteController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/reportar', [PublicReporteController::class, 'create'])->name('public.reporte.create');
Route::post('/reportar', [PublicReporteController::class, 'store'])->name('public.reporte.store');