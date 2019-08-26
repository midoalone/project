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

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/create', 'studentcontroller@create')->name('home'); model
//
//Route::post('/save', 'studentcontroller@save')->name('save');  model
//Route::resource('student','studentcontroller');

Route::get('/save', 'studentscontroller@index')->name('home');
Route::post('/save', 'studentscontroller@save');