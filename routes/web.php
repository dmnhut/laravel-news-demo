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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'NewsController@news_view');

Route::get('welcome', function (){
    return view('welcome');
});

Auth::routes();

Route::get('add','NewsController@news_add');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('news', 'NewsController@news_view');

Route::get('add', 'NewsController@news_add');

Route::post('add', 'NewsController@news_create');

Route::get('edit', 'NewsController@news_edit');

Route::get('update/{newsid}','NewsController@news_show');

Route::post('update/{newsid}','NewsController@news_update');

Route::get('news/{newsid}', 'NewsController@news_detail');

Route::get('delete/{newsid}', 'NewsController@news_delete');

Route::get('category', 'CategoryController@category_view');

Route::post('category', 'CategoryController@category_create');