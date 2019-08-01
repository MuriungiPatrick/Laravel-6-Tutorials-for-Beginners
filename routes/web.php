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
// Define the Route for the About us Page
Route::get('/aboutus', function() {
  return view('/aboutus');
});
// Define the Route for the Web design Page
Route::get('/webdesign', function() {
  return view('services.webdesign');
});
