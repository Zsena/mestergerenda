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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



//Route::get('{slug}', 'PageController@renderPage');
Route::get('/', 'PageController@renderPage')->name('startpage');
Route::get('/referenciak', 'PageController@renderPage')->name('references');
Route::get('/koltsegek', 'PageController@renderPage')->name('costs');
Route::get('/arajanlat', 'PageController@renderPage')->name('offer');
Route::get('/rolunk', 'PageController@renderPage')->name('about');
Route::get('/hirek', 'PageController@renderPage')->name('news');
Route::get('/alapanyagok', 'PageController@renderPage')->name('ingredients');
Route::get('/gerendahaz', 'PageController@renderPage')->name('blockhouse');
Route::get('/egyeb-faepiteszet', 'PageController@renderPage')->name('architecture');
Route::get('/kisteres-projektek', 'PageController@renderPage')->name('projects');
