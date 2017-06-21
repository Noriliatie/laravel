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

Route::get('/', function(){
    return view('welcome');
});
Route::get('/notes', 'NotesController@index');
Route::get('/notes/show', 'NotesController@show');
Route::get('/notes/create', 'NotesController@create');
Route::post('/create', 'NotesController@store');
Route::get('/notes/{note}', 'NotesController@show');
Route::get('/notes/{note}/edit', 'NotesController@edit');
Route::post('/notes/{note}/comments', 'CommentsController@store');

Route::auth();

Route::get('/home', 'HomeController@index');
