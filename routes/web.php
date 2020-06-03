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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/q2', 'PersonController@index')->name('q2');
Route::get('/add', 'PersonController@create')->name('add');
Route::post('/add', 'PersonController@store')->name('add');
Route::get('/edit/{id}', 'PersonController@edit')->name('edit');
Route::post('/edit/{id}', 'PersonController@update')->name('edit');
Route::get('/delete/{id}', 'PersonController@destroy')->name('delete');

Route::get('/q3', 'ProductController@index')->name('q3');
Route::get('/add_product', 'ProductController@create')->name('add_product');
Route::post('/add_product', 'ProductController@store')->name('add_product');
