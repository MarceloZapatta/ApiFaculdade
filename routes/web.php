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

	dd('aq');
	$http = new GuzzleHttp\Client;

	$response = $http->post('http://localhost:8000/oauth/token', [
	    'form_params' => [
	        'grant_type' => 'password',
	        'client_id' => 'client-id',
	        'client_secret' => 'client-secret',
	        'username' => 'taylor@laravel.com',
	        'password' => 'my-password',
	        'scope' => '',
	    ],
	]);

	return json_decode((string) $response->getBody(), true);
});

// Teste de get dos users
$router->get('/users', function () {
	return 'teste';
});
