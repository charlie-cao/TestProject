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
Route::get('/doc/home', 'DocController@home')->middleware('CheckAge:aaaa');
//Route::get('/doc/home', 'DocController@home');
Route::get('/doc/find', 'DocController@find');
Route::get('/doc/my', 'DocController@my');
Route::get('/doc/myf', 'DocController@myf');
Route::get('/doc/read', 'DocController@read');
Route::get('/doc/edit', 'DocController@edit');

//定义参数的路由
Route::get('/doc/woo/{id}/aaa/{bbb}',function ($id,$BBB='abc'){
    echo $url = route('profile',['id'=>3333,'bbb'=>'eeee']);
//   return redirect()->route('profile',['id'=>3453,'bbb'=>'eeee']);
   return $id.$BBB;

})->where(['bbb'=> '[A-Za-z]+'])->name('profile');
//直接定位到视图
//配置中后头的会覆盖前面的,写在后头的路由规则也会覆盖之前设定的
Route::view('/doc/myfview', 'demo.myf');
//重定向路由
//Route::redirect('/doc/home', 'doc/woo', 301);

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/abcd', function () {
        // 使用 first 和 second 中间件
    });
    Route::get('/abc', function () {
        // 使用 first 和 second 中间件
    });
});

Route::get('/laraveldemo/l_view', 'LaravelDemoController@l_view');
Route::get('/laraveldemo/l_vue', 'LaravelDemoController@l_vue');
Route::get('/laraveldemo/l_cache', 'LaravelDemoController@l_cache');
Route::get('/laraveldemo/l_db', 'LaravelDemoController@l_db');
Route::get('/laraveldemo/l_route', 'LaravelDemoController@l_route');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('apples', 'AppleController');

Route::resource('notes', 'noteController');


