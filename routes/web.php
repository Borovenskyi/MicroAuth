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
    return view('index');
});
$router->get('/reg', function () use ($router) {
    return view('reg');
});
$router->post('/reg', 'RegController@reg');
$router->post('/login', 'LoginController@login');
$router->get('/home', [
    'as' => 'home', 'uses' => 'HomeController@index'
]);
$router->get('/logout', 'LoginController@logout');