<?php

use App\Http\Controllers\CityController;
use App\Models\City;

/* Ruta para la página de inicio */
$router->get('/', function () use ($router) {
    return view('home');
});

/* Muestra todos los datos de las ciudades */
$router->get('/sugerencias', 'CityController@readCity');

/* Muestra un dato de la ciudad dependiendo su ID */
$router->get('/sugerencias/{id}', 'CityController@getID');

/* Elimina un dato en base a su ID */
$router->delete('/sugerencias//{id}', 'CityController@deleteCity');

/* Actualiza un dato en base a su ID */
$router->put('/sugerencias/{id}', 'CityController@updateCity');
