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

$router->get('/details','DetailsController@detailsSelect');
$router->post('/details','DetailsController@detailCreate');
$router->delete('/details','DetailsController@DetailsDelete');
$router->put('/details','DetailsController@DetailsUpdate');

//using query builder
$router->post('/querybuilder','DetailsController@insertWithBuilder');


//using Eloquent ORM--model
$router->get('/students','StudentController@SelectAll');
$router->post('/students','StudentController@SelectByID');
