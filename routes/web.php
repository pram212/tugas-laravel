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


// tugas laravel hari ke 3
Route::get('/', function(){
	return view('table');
});

Route::get('/datatables', function(){
	return view('datatables');
});

// tugas laravel hari ke 2
Route::get('/register', 'AuthController@showForm');

Route::get('/welcome', 'AuthController@showWelcomePage');

Route::post('/welcome', 'AuthController@getFullName');
