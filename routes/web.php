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
Route::get('/', 'StudentController@home');

Route::resource('/home', 'StudentController');
Route::get('/search', 'StudentController@search')->name('search');
Route::post('/fetch-result', 'StudentController@searchResult')->name('fetch-result');



// Route::get('/', function () {
//     return view('home.register');
// });

Auth::routes();
Route::resource('/admin', 'AdminController');

