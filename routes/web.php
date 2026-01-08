<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ruta para probar el middleware
Route::get('/prueba', function () {
    return 'Eres mayor de edad!';
})->middleware('age');