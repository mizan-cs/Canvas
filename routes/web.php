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


Route::get('/','QuestionController@index')->name('home');
//End QuestionController


Route::post('/register', 'RegistrationController@store');
Route::get('/register', 'RegistrationController@create');
//End RegistrationController


Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destry');
//End SessionsController

Auth::routes();
