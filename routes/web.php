<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeverancierController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/leveranciers', [LeverancierController::class, 'index'])->name('leveranciers.index');
Route::get('/leverancier/{id}/producten', [LeverancierController::class, 'showProducten'])->name('leverancier.producten');
