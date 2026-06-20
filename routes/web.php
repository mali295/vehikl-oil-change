<?php

use App\Http\Controllers\OilChangeCheckController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OilChangeCheckController::class, 'create'])->name('oil-check.create');

Route::post('/check', [OilChangeCheckController::class, 'store'])->name('oil-check.store');

Route::get('/result/{id}', [OilChangeCheckController::class, 'show'])->name('oil-check.show');