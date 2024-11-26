<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeverancierController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/leveranciers', [LeverancierController::class, 'index']);
