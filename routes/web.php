<?php

use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::get('/', 'MapaController@index')->name('mapa'); // Muestra el mapa principal

// Autenticación de usuarios
Route::get('/registrar', 'Auth\RegisterController@showRegistrationForm')->name('registro'); // Vista de registro
Route::post('/registrar', 'Auth\RegisterController@register'); // Procesar registro
Route::get('/iniciar-sesion', 'Auth\LoginController@showLoginForm')->name('inicio-sesion'); // Vista de inicio de sesión
Route::post('/iniciar-sesion', 'Auth\LoginController@login'); // Procesar inicio de sesión
Route::post('/cerrar-sesion', 'Auth\LoginController@logout')->name('cerrar-sesion'); // Cerrar sesión

// Rutas para usuarios autenticados
Route::middleware(['auth'])->group(function () {
    // Crear un punto verde
    Route::get('/crear-punto-verde', 'PuntoVerdeController@crear')->name('puntos-verdes.crear');
    Route::post('/crear-punto-verde', 'PuntoVerdeController@guardar')->name('puntos-verdes.guardar');

    // Ver y administrar puntos verdes del usuario
    Route::get('/mis-puntos-verdes', 'PuntoVerdeController@misPuntosVerdes')->name('puntos-verdes.mis');
    Route::get('/punto-verde/{id}', 'PuntoVerdeController@ver')->name('puntos-verdes.ver');
    Route::post('/punto-verde/{id}/calificar', 'PuntoVerdeController@calificar')->name('puntos-verdes.calificar');
    Route::post('/punto-verde/{id}/comentar', 'PuntoVerdeController@comentar')->name('puntos-verdes.comentar');

    // Reportar un problema
    Route::get('/reportar-problema', 'ReporteController@crear')->name('reportar-problema');
    Route::post('/reportar-problema', 'ReporteController@guardar')->name('reportar-problema.guardar');
});

