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
Route::pattern('id', '[0-9]*');
Route::pattern('slug', '(.)*');
Route::group(['namespace' => 'VnExpress' ], function (){
    Route::get('/', 'IndexController@home')->name('vnexpress.page.home');
    Route::get('{slug}-{id}', 'NewsController@category')->name('vnexpress.page.category');
    Route::get('{slug}-{id}.html', 'NewsController@detail')->name('vnexpress.page.detail');
    Route::get('gioi-thieu', 'ContactController@about')->name('vnexpress.page.about');

    Route::group(['prefix' => 'lien-he'], function (){
        Route::get('/', 'ContactController@getContact')->name('vnexpress.page.contact');
        Route::post('/', 'ContactController@postContact')->name('vnexpress.page.contact');
    });


    Route::get('khong-tim-thay', 'ErrorController@error')->name('vnexpress.page.error');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin' ], function (){

    Route::resource('news', 'NewsController');
    Route::resource('cat', 'CatController');
    Route::resource('user', 'UserController');
    Route::resource('adv', 'AdvController');
    Route::get('statistic', 'StatisticController@index')->name('statistic.index');

});