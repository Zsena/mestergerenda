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

Route::get('/page/{slug}', 'PageController@getPage');

Route::get('/', 'StartPageController@index')->name('startpage');

Route::get('/referenciak', 'PageController@renderPage')->name('references');
Route::get('/koltsegek', 'PageController@renderPage')->name('costs');
Route::get('/arajanlat', 'PageController@renderPage')->name('offer');
Route::get('/rolunk', 'PageController@renderPage')->name('about');

Route::get('/hirek', 'NewsController@news');
Route::get('/hirek/{id}/{slug}', 'NewsController@show');

Route::get('/alapanyagok', 'PageController@renderPage')->name('ingredients');
Route::get('/gerendahaz', 'PageController@renderPage')->name('blockhouse');
Route::get('/egyeb-faepiteszet', 'PageController@renderPage')->name('architecture');
Route::get('/kisteres-projektek', 'PageController@renderPage')->name('projects');
Route::get('/kapcsolat', 'PageController@renderPage')->name('contact');
Route::get('/cookie', 'PageController@renderPage')->name('cookie');
Route::get('/adatkezelesi-szabalyzat', 'PageController@renderPage')->name('privacy');
Route::get('/cegadatok', 'PageController@renderPage')->name('imprint');
Route::get('/hir-1', 'PageController@renderPage')->name('news-single');
