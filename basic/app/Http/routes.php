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
    return view('home');
});

Route::resource('lists', 'ListsController');
Route::resource('posts', 'PostsController');
Route::resource('comments', 'CommentsController');
Route::resource('users', 'UsersController');
Route::resource('contact', 'ContactController');
// Route::group(['middleware' => 'auth'], function () {
// 	Route::resource('category', 'CategoryController');
// });
Route::group(['middleware' => 'auth'], function () {
	Route::group(['as' => 'admin::'], function () {
	    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'admin\HomeController@index']);
        Route::resource('category', 'CategoryController');
	});
});

// Socialite Authentication
Route::group ( [ 
		'prefix' => 'socialite'
], function () {
	// facebook
	Route::get('facebook', 'Auth\FacebookController@redirectToProvider');
	Route::get('facebook/callback', 'Auth\FacebookController@handleProviderCallback');

	// google
	Route::get('google', 'Auth\GoogleController@redirectToProvider');
	Route::get('google/callback', 'Auth\GoogleController@handleProviderCallback');

	// twitter
	Route::get('twitter', 'Auth\TwitterController@redirectToProvider');
	Route::get('twitter/callback', 'Auth\TwitterController@handleProviderCallback');

	// linkedin
	Route::get('linkedin', 'Auth\LinkedinController@redirectToProvider');
	Route::get('linkedin/callback', 'Auth\LinkedinController@handleProviderCallback');

} );
