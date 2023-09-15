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
})->name('index');
Route::post('login', 'UserController@login')->name('login');

Route::group(['middleware' => ['access']], function (){
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('generate', 'HomeController@generate')->name('generate');
    Route::post('generate', 'ImageController@generate')->name('generate');
    Route::get('halfTime', 'HomeController@halfTime')->name('halfTime');
    Route::get('fullTime', 'HomeController@fullTime')->name('fullTime');
    Route::get('startingEleven', 'HomeController@startingEleven')->name('startingEleven');
    Route::get('files', 'HomeController@files')->name('files');
    Route::post('upload', 'ImageController@upload')->name('upload');

    Route::get('/home', 'HomeController@index')->name('home');
});
