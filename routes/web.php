<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('layouts.master');
});
Route::get('/testmusic', function () {
	return view('layouts.test');
});



Route::get('/register', 'RegistrationController@register');
Route::post('/register', 'RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');

Route::get('/artists','ArtistController@index');
Route::get('/artist/{artist}','ArtistController@show');

Route::get('/albums', 'AlbumController@index');
Route::get('/album/{album}','AlbumController@show');

Route::get('/add_to_playlist/{song}', 'PlaylistController@store');