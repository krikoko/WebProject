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


Route::group(['prefix' => '/'], function()
{
    Route::get('/', 'Pub\IndexController@index');
    
});     


Auth::routes();
Route::group([ 'middleware' => 'auth'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/photo', 'Pub\PhotoController@index')->name('photo');
    Route::post('/photo', 'Pub\PhotoController@save')->name('photo');
    Route::get('search', 'Pub\SearchController@index')->name('search');
    Route::get('autocomplete', 'Pub\SearchController@search')->name('search');


    Route::group(['prefix' =>'admin', ], function()  
    {
        Route::get('home/adminpanel', 'HomeController@admin')->name('admin');
        Route::resource('/news', 'NewsController');
    });

});
