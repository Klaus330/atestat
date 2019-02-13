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
});

Route::view('/about','about');
Route::view('examples/game','game');
Route::view('examples/video-classifier','web');
Route::view('examples/color-picker','color');
Route::view('examples/image-classifier','image');

