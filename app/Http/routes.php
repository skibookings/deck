<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::resource('posts', 'PostController');

    Route::get('/', 'FrontController@welcome');
    Route::get('/skiing', 'FrontController@skiing');
    Route::get('/shop', 'FrontController@shop');
    Route::get('/parties', 'FrontController@parties');
    Route::get('/contact', 'FrontController@contact');
    Route::get('/items', 'FrontController@items');
    Route::get('/bumboarding', 'FrontController@bumboarding');
    Route::get('/slide', 'FrontController@slide');

});
