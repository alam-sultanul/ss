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

Route::get('/', 'StudentController@index');


Route::get('/addStudent', 'StudentController@create');

Route::resource('student','studentController');

Route::get('/app', function () {
    return "hello world";
});


