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


//Route::get('/', 'IndexController@Index');
Route::get('/', 'MoviesController@Index');
Route::get('/movies-list', 'MoviesController@Movies'); 
Route::get('/movies/detail/venom', 'MovieController@detail');
Route::get('/continents/europe', 'ContinentController@Europe');