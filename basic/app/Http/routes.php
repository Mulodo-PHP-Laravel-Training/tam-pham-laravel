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
// Route::group(['middleware' => 'auth'], function () {
// 	Route::resource('category', 'CategoryController');
// });
Route::group(['middleware' => 'auth'], function () {
	Route::group(['as' => 'admin::'], function () {
	    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'admin\HomeController@index']);
        Route::resource('category', 'CategoryController');
	});
});
