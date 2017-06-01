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
/*Route::get('/test', function () {
	return view('dashboard.manage');
});*/

Route::get('/dashboard','AdminController@index');
Route::get('/dashboard/users','AdminController@users');
Route::post('/dashboard/users/{user}/delete', 'AdminController@destroyUser');
Route::get('/dashboard/artists','AdminController@artistsData');
Route::get('/dashboard/albums','AdminController@albumsData');
Route::get('/dashboard/songs','AdminController@songsData');


Route::get('/dashboard/create/artist','ArtistController@create');
Route::post('/dashboard/create/artist','ArtistController@store');




Route::get('/register', 'RegistrationController@register');
Route::post('/register', 'RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');

Route::get('/artists','ArtistController@index');
Route::get('/artist/{artist}','ArtistController@show');

Route::get('/albums', 'AlbumController@index');
Route::get('/album/{album}','AlbumController@show');
Route::get('/dashboard/create/album','AlbumController@create');
Route::post('/dashboard/create/album','AlbumController@store');

Route::get('/profile/{user}', 'ProfileController@show');

Route::post('/profile/{user}', 'MessageController@store');


Route::get('/add_to_playlist/{song}', 'PlaylistController@store');
Route::get('/like/{playlist}', 'PlaylistController@like');
Route::get('/unlike/{playlist}', 'PlaylistController@unlike');
