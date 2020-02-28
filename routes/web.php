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

Route::get('/test', function () {
    return 'welcome to test page!';
});

/*
Route::get('/students', 'StudentController@index');
Route::get('/students/{student}', 'StudentController@show')->name('students.show');
Route::post('/students/, 'StudentController@store');
この３つは良く使うのでまとめられる↓
*/

Route::resource('students', 'StudentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
