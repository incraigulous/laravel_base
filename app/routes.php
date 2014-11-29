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

//HOME
Route::get('/', 'HomeController@show');

//DASHBOARD
Route::get('/dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@show'));

//DIRECTORY
Route::get('/rules', array('as' => 'rules', 'uses' => 'DirectoryController@show'));

//MILESTONES
Route::resource('milestones', 'MilestoneController');

//USER
Route::get('/login', array('as' => 'login', 'uses' => 'UserController@login'));
Route::post('/login', 'UserController@processLogin');
Route::get('/logout', 'UserController@logout');
Route::get('users/destroy/{id}', 'UserController@destroy');
Route::get('users/revive/{id}', 'UserController@revive');
Route::resource('users', 'UserController');

Route::get('/denied', array('as' => 'denied', function()
{
    return View::make('denied');
}));

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::get('api/v1/users', 'UserApiController@index');
Route::get('api/v1/users/{id}', 'UserApiController@show');
Route::post('api/v1/users/{id}', 'UserApiController@authenticate');
Route::get('api/v1/users/{id}', 'UserApiController@getUserDetails');
Route::put('api/v1/users/{id}', 'UserApiController@deauthenticate');