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
Route::get('/', 'PageController@index');//Welcome View
Route::get('/about', 'PageController@aboutus');//About us View
Route::get('/webdesign', 'PageController@webdesign');//Webdesign view
