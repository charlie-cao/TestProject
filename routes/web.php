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

Route::get('/', 'DocController@index');

Route::get('/doc', 'DocController@index');
Route::get('/doc/laravel', 'DocController@laravel');
Route::get('/doc/vue', 'DocController@vue');
Route::get('/doc/sass', 'DocController@sass');
Route::get('/doc/grunt', 'DocController@grunt');


/**
 * 站点原型
 */
Route::get('/doc/home', 'DocController@home');
Route::get('/doc/find', 'DocController@find');
Route::get('/doc/my', 'DocController@my');
Route::get('/doc/myf', 'DocController@myf');
Route::get('/doc/read', 'DocController@read');
Route::get('/doc/edit', 'DocController@edit');


Route::get('/laraveldemo/l_view', 'LaravelDemoController@l_view');
Route::get('/laraveldemo/l_vue', 'LaravelDemoController@l_vue');
Route::get('/laraveldemo/l_cache', 'LaravelDemoController@l_cache');
Route::get('/laraveldemo/l_db', 'LaravelDemoController@l_db');
Route::get('/laraveldemo/l_route', 'LaravelDemoController@l_route');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('apples', 'AppleController');

Route::resource('notes', 'noteController');
