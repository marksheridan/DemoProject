<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

// city part

Route::get('/home', 'HomeController@index');


Route::get('/createcity','CityController@create');

Route::post('/storecity','CityController@store');

Route::get('/showcity','CityController@show');

Route::get('/editcity/{num}','CityController@edit');

Route::post('/updatecity/{num}','CityController@update');

Route::get('/deletecity/{num}','CityController@delete');

//venue part

Route::get('/createvenue','VenueController@create');

Route::post('/storevenue','VenueController@store');

Route::get('/showvenue','VenueController@show');

Route::get('/editvenue/{num}','VenueController@edit');

Route::post('/updatevenue/{num}','VenueController@update');

Route::get('/deletevenue/{num}','VenueController@delete');
