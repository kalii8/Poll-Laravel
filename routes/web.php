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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/polls', 'PollController@show');
Route::get('/polls/new', 'PollController@create');
Route::post('/polls', 'PollController@store');
Route::get('/polls/{code}/edit', 'PollController@edit');
Route::post('/polls/{id}', 'PollController@update');
Route::get('/poll_options/{code}', 'PollOptionController@create');
Route::post('/poll_options/{code}', 'PollOptionController@store');
Route::get('/poll_options/{code}/display', 'PollOptionController@display');


//Route::get('/polls/{id}', 'PollController@show');
