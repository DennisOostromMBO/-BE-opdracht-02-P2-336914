<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeverancierController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/leverancier', LeverancierController::class);

Route::get('/leveranciers', [LeverancierController::class, 'index'])->name('leveranciers.index');
Route::get('/leverancier/{id}/producten', [LeverancierController::class, 'showProducten'])->name('leverancier.producten');
Route::get('/leveranciers/create', [LeverancierController::class, 'create'])->name('leveranciers.create');