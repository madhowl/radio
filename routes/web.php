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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/main', 'MainController@radios')->name('main');

Route::get('/genres', 'MainController@categories')->name('genres');

Route::prefix('genres')->group(function (){
    Route::get('/{id}', 'MainController@showRadiosFromGenre')->name('genres.id');
});

Route::get('/countries', 'MainController@countries')->name('countries');

Route::prefix('countries')->group(function (){
    Route::get('/{id}', 'MainController@showRadiosFromCountries')->name('countries.id');
});
Route::prefix('radio')->group(function (){
    Route::get('/{id}', 'MainController@radios_id')->name('radio.id');
});

Route::get('/about', 'MainController@about')->name('about');

Route::get('/contact', 'MainController@contact')->name('contact');

Auth::routes(['verify' => true]);

Route::get('admin', 'RadioController@index')->middleware('verified');

Route::prefix('admin')->group(function () {

    Route::get('/', 'RadioController@index');

    Route::resource('radios', 'RadioController');

    Route::resource('categories', 'CategoryController');

    Route::resource('countries', 'CountryController');
});

