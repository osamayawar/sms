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






Auth::routes();

Route::get('/', function () {
	return Auth::guest() ? view('auth/login') : redirect('/home');
});

Route::get('/home', 'HomeController@index');
Route::get('/student', 'StudentController@index');
Route::get('/student/add', 'StudentController@add');
