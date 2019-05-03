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
    return view('index');
})->name('home');

Route::view('/about','about');
Route::view('examples/game','game');
Route::view('examples/video-classifier','web');
Route::view('examples/color-picker','color');
Route::view('examples/image-classifier','image');
Route::post('/contact','ContactController@store')->name('contact.store');
Route::get('/contact/{contact}','ContactController@show')->name('contact.show');
Route::delete('/contact/{contact}','ContactController@destroy')->name('contact.delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');
