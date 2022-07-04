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

Route::get('/home', 'App\Http\Controllers\LoginController@show');


Route::get('/addSong','App\Http\Controllers\SongController@index');
Route::post('/addSong','App\Http\Controllers\SongController@store');

Route::get('/addArtist','App\Http\Controllers\ArtistController@create');
Route::post('/addArtist','App\Http\Controllers\ArtistController@store');


Route::get('/','App\Http\Controllers\LoginController@index');
Route::post('/','App\Http\Controllers\LoginController@create');

Route::get('/rating/{id}','App\Http\Controllers\SongController@edit');
Route::post('/rating/{id}','App\Http\Controllers\SongController@update');