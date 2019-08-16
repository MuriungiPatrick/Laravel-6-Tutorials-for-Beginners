<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::prefix('page')->group(function() {
  Route::get('/aboutus', 'PageController@aboutus')->name('about');//About us View
  Route::get('/webdesign', 'PageController@webdesign')->name('services.webdesign');//Webdesign view
});
// Route::get('/', 'PageController@index');//Welcome View


Route::get('/', 'QuoteController@index');// Route for the quotes homepage
Route::get('/quotes/show', 'QuoteController@show')->name('quotes.show');// Route for the quotes Details View

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
