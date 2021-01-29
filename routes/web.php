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

$router->get('/details','DetailsController@DetailsSelect');
$router->post('/details','DetailsController@DetailsDelete');
$router->delete('/details','DetailsController@DetailsUpdate');
$router->put('/details','DetailsController@DetailsInsert');