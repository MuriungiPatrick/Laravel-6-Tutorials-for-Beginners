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
Route::get('/', 'PageController@index');// Define the Route for the Homepage
Route::get('/aboutus', 'PageController@aboutus')->name('about');// Define the Route for the About us Page
Route::get('/webdesign', 'PageController@webdesign')->name('services.webdesign');// Define the Route for the Web design Page
Route::get('/contact', 'PageController@contact')->name('contact');// Define the view for the contact page
