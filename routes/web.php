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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prijava', function () {
    return view('subscribers.create');
});

Route::get('/subscribers', 'SubscriberController@index');
Route::get('/subscribers/{subscriber}', 'SubscriberController@show');
Route::post('/subscribers', 'SubscriberController@store');
