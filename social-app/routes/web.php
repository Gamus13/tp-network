<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| C'est ici que vous pouvez enregistrer des routes Web pour votre application. Ces
| les routes sont chargées par le RouteServiceProvider et toutes seront
| être affecté au groupe middleware "web". Faites quelque chose de génial !
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
