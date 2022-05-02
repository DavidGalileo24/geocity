<?php

use App\Http\Controllers\CityController;
use App\Models\City;
/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/sugerencias', 'CityController@readCity');

$router->post('/sugerencias/nueva-ciudad', 'CityController@saveCity');

$router->get('/sugerencias/{id}', 'CityController@getID');

$router->delete('/sugerencias//{id}', 'CityController@deleteCity');

$router->get('/sugerencias/{id}', 'CityController@updateCity');
