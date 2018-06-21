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
Route::get('/vision', function () {
    return view('vision');
});
Route::get('/autoridades', function () {
    return view('autoridades');
});
Route::get('/novedades', function () {
    return view('novedades');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
