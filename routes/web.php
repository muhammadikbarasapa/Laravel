<?php

use App\Http\Controllers\IbarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [IbarController::class, 'home']);
Route::get('/blog', [IbarController::class, 'bout']);
Route::get('/tutor', [IbarController::class, 'tutorr']);