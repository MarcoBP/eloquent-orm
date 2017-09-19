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

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/all', [
    'as' => 'all',
    'uses' => 'QueryController@getAll'
]);

Route::get('/get/{gender}', [
    'as' => 'get',
    'uses' => 'QueryController@getGet'
]);

Route::get('/get-custom', [
    'as' => 'get-custom',
    'uses' => 'QueryController@getCustom'
]);

Route::get('/delete/{id}', [
    'as' => 'delete',
    'uses' => 'QueryController@delete'
]);

Route::get('/lists', [
    'as' => 'lists',
    'uses' => 'QueryController@lists'
]);

Route::get('/first-last', [
    'as' => 'first-last',
    'uses' => 'QueryController@firstLast'
]);