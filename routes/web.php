<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ruta sin middleware
Route::get('/home', function () {
    return 'Pagina de inicio - acceso libre';
});

// rutas con middleware
Route::get('/adultos', function () {
    return 'Bienvenido al area de adultos!';
})->middleware('age');

Route::get('/prueba', function () {
    return 'Eres mayor de edad!';
})->middleware('age');