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
//admin/xx でくるアクセスのグループ↓から
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/edit','Admin\NewsController@edit');
    Route::post('news/edit','Admin\NewsController@update');
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
    
//【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の add Action に、admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください。
     Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');

     Route::post('profile/create','Admin\ProfileController@create');
     Route::get('profile/edit', 'Admin\ProfileController@edit');  
     Route::post('profile/edit','Admin\ProfileController@update');
     Route::get('profile','Admin\ProfileController@index');
     Route::post('Profile/edit','Admin\ProfileController@update');
     Route::get('Profile/delete', 'Admin\ProfileController@delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
