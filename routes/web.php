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

$router->get('/', function () use ($router) {
    // return $router->app->version();
    return response()->json(['message' => $router->app->version()], 200, array(), JSON_PRETTY_PRINT);
});

$router->get('/time', function () use ($router) {
    return response()->json(['message' => date('Y-m-d H:i:s T')], 200, array(), JSON_PRETTY_PRINT);
});

$router->get('/hello', function () use ($router) {
    return response()->json(['message' => "Hello World!"], 200, array(), JSON_PRETTY_PRINT);
});

$router->group(['prefix'=>'api/'], function() use($router){
    $router->get('/sysusers', 'SysuserController@index');
    $router->post('/sysuser', 'SysuserController@create');
    $router->get('/sysuser/{id}', 'SysuserController@show');
    $router->put('/sysuser/{id}', 'SysuserController@update');
    $router->delete('/sysuser/{id}', 'SysuserController@destroy');
});