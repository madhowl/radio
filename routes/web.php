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


Route::get('/main', 'MainController@index1');

Route::get('/genres', 'MainController@categories');
Route::prefix('genres')->group(function (){
    Route::get('/{id}', 'MainController@showRadiosFromGenre');
});

Route::get('/countries', 'MainController@countries');
Route::prefix('countries')->group(function (){
    Route::get('/{id}', 'MainController@showRadiosFromCountries');
});
//Route::get('/login', 'MainController@index4');
Route::get('/register', 'MainController@index5');
Route::get('/about', 'MainController@index6');
Route::get('/contact', 'MainController@index7');
//Route::get('/radio/{id}', 'MainController@showRadiosFromGenre');

Auth::routes(['verify' => true]);

Route::get('admin', 'RadioController@index')->middleware('verified');

Route::prefix('admin')->group(function () {


Route::get('/', 'RadioController@index');

Route::resource('radios', 'RadioController');

Route::resource('categories', 'CategoryController');

Route::resource('countries', 'CountryController');
});

