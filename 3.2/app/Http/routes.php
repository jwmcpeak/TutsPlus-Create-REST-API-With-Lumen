<?php

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

$app->get('/', function () use ($app) {
    return 'Welcome to the Music Store';
});

$app->group(['prefix' => 'guitars', 'namespace' => 'App\Http\Controllers'], function($app) {
    
    // http://localhost:8000/guitars
    $app->get('/', 'GuitarController@index');

    // http://localhost:8000/guitars/50  
    $app->get('{id}', 'GuitarController@find');

    // http://localhost:8000/guitars  
    $app->post('/', 'GuitarController@create');

    // http://localhost:8000/guitars/50  
    $app->put('{id}', 'GuitarController@update');
    
    // http://localhost:8000/guitars/50  
    $app->delete('{id}', 'GuitarController@delete');
});
