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
// Route for the Welcome View
Route::get('/', function () {
    return view('welcome');
});
// Route for the About us View
Route::get('/about', function () {
    return view('aboutus');
});
// Route for the Webdesign view
Route::get('/webdesign', function () {
    return view('services.webdesign');
});
