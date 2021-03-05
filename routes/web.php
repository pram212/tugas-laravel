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

|--------------------------------------------------------------------------

|--------------------------------------------------------------------------
| Route tugas laravel "Routing dan Controller"
|--------------------------------------------------------------------------
| Membuat route
|
*/

Route::get('/register', 'AuthController@showForm');

Route::get('/welcome', 'AuthController@showWelcomePage');

Route::post('/welcome', 'AuthController@getFullName');

/*
|--------------------------------------------------------------------------
| Route tugas laravel "Templating Blade"
|--------------------------------------------------------------------------
| Membuat route untuk menerapkan templating blade adminLTE
|
*/

Route::get('/', function(){
	return view('table');
});

Route::get('/datatables', function(){
	return view('datatables');
});

/*
|--------------------------------------------------------------------------
| Route tugas laravel "CRUD"
|--------------------------------------------------------------------------
| Membuat route CRUD database
|
*/

Route::get('/pertanyaan', 'PertanyaanController@index');

Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
 
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');

Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');

Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');