<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'bienvenido');

// Route::get('/', function () {
//     return view('bienvenido');
// });


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
