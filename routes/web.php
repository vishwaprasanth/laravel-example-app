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

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register','UserController@Register');         

Route::get('/view','UserController@view');   

Route::get('/delete/{id}','UserController@delete');

Route::get('/edit/{id}','UserController@edit');

Route::get('/update/{id}','UserController@update');