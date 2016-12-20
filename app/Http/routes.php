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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('welcome','HomeController@root');


//Login Routes...
Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);

Route::post('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login']);

Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);

// Registration Routes...
Route::get('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@showRegistrationForm']);
Route::post('register', ['as' => 'auth.register', 'uses' => 'Auth\AuthController@register']);

// Password Reset Routes...
Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
Route::post('password/email', ['as' => 'auth.password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
Route::post('password/reset', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@reset']);


//Home Page
Route::get('/home', 'HomeController@index');

Route::get('/','HomeController@root');

Route::get('/admin/main','AdminController@mainpage');

// city part

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

//guestlist part

Route::get('/addtoguestlist/{num}','GuestController@create');

Route::post('/storeguest/{num}','GuestController@store');

Route::get('/addevent/{val}','EventController@create');


Route::get('/addvenue','HomeController@addvenue');

Route::get('/eventdisplay/{value}','EventController@show');

Route::get('/artist','UserController@showartist');

Route::get('/promoters','UserController@showpromoters');

Route::get('/venue-list/{value}', 'EventController@getVenues');

Route::post('/storeevent','EventController@store');

Route::get('/search','HomeController@search');

Route::get('user/artist_profile','UserController@showartist');

Route::get('/usereventlist','UserController@user_eventlist');

Route::get('/guestlist','UserController@guest_list');

//user profile part

Route::get('/userprofile','UserController@user_profile');

Route::post('/updateprofile/{num}','UserController@updateuser');

Route::get('/artistprofile/{num}','UserController@artist_profile');

Route::get('/eventdetails','UserController@event_details');
 
Route::get('/editevent','UserController@edit_event');

Route::get('/user/eventdisplay/{num}','UserController@userevent');

//Load More

Route::get('/get-more/{val}','HomeController@getmore');

Route::get('/get-more/','HomeController@getmoreall');

Route::get('/get-popular/','HomeController@getpopular');

//Get Events According to City

Route::get('/get-events-city/{val}','HomeController@getevents');

Route::get('/get-events-city/','HomeController@getallevents');
