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

// Dashboard routes
Route::get('dashboard', 'DashboardController@index');
// Route::get('dashboard', ['middleware' => 'auth', 'uses' => 'DashboardController@index']);

// Article routes
Route::get('article', 'ArticleController@index');
Route::get('article/create', 'ArticleController@create');
Route::post('article/store', 'ArticleController@store');

// Category routes
Route::get('category', 'CategoryController@index');

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');