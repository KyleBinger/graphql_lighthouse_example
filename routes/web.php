<?php

/** @var \Laravel\Lumen\Routing\Router $router */


use App\Http\Controllers\Api\v1\CardApiController;
use App\Http\Controllers\Api\v1\SetApiController;

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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', fn() => response()->json($router->app->version(), 200));

$router->group(['prefix' => 'api', 'namespace' => 'Api'], function() use ($router) {
    $router->get('v1/cards', 'v1\\CardApiController@index');
    $router->get('v1/sets', 'v1\\SetApiController@index');
});