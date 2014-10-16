<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

use \GuzzleHttp\Client;

Route::get('/', function()
{
    $client = new Client();
    $response = $client->get('https://api.github.com/users/tomgajewski');
    $response = $response->json();

    dd($response);

//
//    if ($response->getBody()) {
//        echo $response->getBody();
//        // JSON string: { ... }
//    }

    dd($response->getBody());

//    $response = $client->get('http://api.github.com/users/tomgajewski');

//    dd($response->getBody());


	return View::make('hello');
});
