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
Route::view('/', 'welcome', ['title' => 'Homepage']);//Welcome View
Route::view('/about', 'aboutus', ['title' => 'Aboutus']);//About us View
Route::view('/webdesign', 'services.webdesign', ['title' => 'Webdesign']);//Webdesign view
