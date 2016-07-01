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

Route::get('/', 'NotesController@index');
Route::post('store', 'NotesController@store');
Route::get('{id}', 'NotesController@check');
Route::get('{id}/destroy', 'NotesController@destroy');
Route::get('{id}/edit', 'NotesController@edit');
Route::patch('{id}', 'NotesController@update');