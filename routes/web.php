<?php

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



$router->get('/datos_aforo','DatosController@index');

$router->get('/datos_aforo/{id}','DatosController@mostrar');

$router->post('/datos_aforo','DatosController@guardar');

$router->delete('/datos_aforo/{id}','DatosController@eliminar');

$router->post('/datos_aforo/{id}','DatosController@actualizar');


$router->get('/datos_conteo','ConteoController@index');

$router->get('/datos_conteo/{id}','ConteoController@mostrar');

$router->post('/datos_conteo','ConteoController@guardar');

$router->delete('/datos_conteo/{id}','ConteoController@eliminar');

$router->post('/datos_conteo/{id}','ConteoController@actualizar');
