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
// Define the Route for the Homepage
Route::get('/', function () {
     //localhost:8000
    return view('welcome');
});
Route::view('/aboutus', '/aboutus');// Define the Route for the About us Page
Route::view('/webdesign', 'services.webdesign');// Define the Route for the Web design Page
Route::view('/contact', '/contactus');// Define the view for the contact page
