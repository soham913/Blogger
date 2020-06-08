<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('Posts','PostController');

Route::get('/','PagesController@getIndex');

Route::get('Pages/about','PagesController@getAbout');

Route::get('Pages/contact','PagesController@getContact');





Route::group(['middleware' =>['web']],function(){

Route::resource('Posts','PostController');

Route::get('/','PagesController@getIndex');

Route::get('Pages/about','PagesController@getAbout');

Route::get('Pages/contact','PagesController@getContact');

});


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
