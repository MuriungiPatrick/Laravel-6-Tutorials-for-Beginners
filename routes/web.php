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
Route::get('/', 'PageController@index');//Welcome View
