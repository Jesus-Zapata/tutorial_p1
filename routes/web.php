<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/signin', 'HomeController@signin')->name("home.signin");
Route::get('/inicio', 'HomeController@index')->name("home.index");
Route::get('/game', 'HomeController@game')->name("home.game");
Route::post('someurl', 'Game@postGame');

Auth::routes();

