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

Route::get('/shows', 'ShowController@index')->name('shows.index');
Route::get('/shows/{id}', 'ShowController@show',['id'])->name('shows.show');
Route::delete('/shows/{id}', 'ShowController@destroy',['id'])->name('shows.destroy');

Route::resource('locations','LocationController');