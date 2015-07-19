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

Route::get('/', 'PagesController@home');

/**
 * Log in and logout using SessionsController
 */
Route::post('/', [
    'as'   => 'login_path',
    'uses' => 'SessionsController@store'
]);

Route::get('logout', [
    'as'  => 'logout_path',
    'uses' => 'SessionsController@destroy'
]);

/**
 * ArticlesController
 */

Route::get('articles',[
    'as'     => 'articles_home',
    'uses'   => 'ArticlesController@index'
]);