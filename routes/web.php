<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@home');

Route::get('/about','PagesController@about');

Route::get('/mothership','PagesController@mothership');

Route::get('/cities','CityController@index');

Route::get('/countries','CountryController@index');

Route::get('/countries/search','CountryController@search');

Route::get('/countries/{country}','CountryController@show')->name('countryShow');

