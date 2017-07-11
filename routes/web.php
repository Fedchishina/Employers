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
    return view('pages.employers.tree');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//positions
Route::get('/positions', 'PositionController@getPositions');
Route::post('/position/add', 'PositionController@postAddPosition');
Route::post('/position/edit', 'PositionController@postEditPosition');
Route::post('/position/del', 'PositionController@postDelPosition');
