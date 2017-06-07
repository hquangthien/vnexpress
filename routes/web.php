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
    Route::get('home', 'IndexController@home')->name('vnexpress.page.home');
    Route::get('{slug}-{id}', 'NewsController@category')->name('vnexpress.page.category');
    Route::get('{slug}-{id}.html', 'NewsController@detail')->name('vnexpress.page.detail');
    Route::get('gioi-thieu', 'ContactController@about')->name('vnexpress.page.about');


    Route::group(['prefix' => 'lien-he'], function (){
        Route::get('/', 'ContactController@getContact')->name('vnexpress.page.contact');
        Route::post('/', 'ContactController@postContact')->name('vnexpress.page.contact');
        Route::get('tag/{slug}-{id}', 'NewsController@tag')->name('vnexpress.page.tag');
    });


    Route::get('khong-tim-thay/{status}', 'ErrorController@error')->name('vnexpress.page.error');
});

/*** Route Login Logout ***/

Route::group(['namespace' => 'Auth'], function (){
    Route::get('login', 'LoginController@getLogin')->name('login');
    Route::post('login', 'LoginController@postLogin')->name('login');
    Route::get('logout', 'LoginController@logout')->name('logout');
});

/*** END Route Login Logout ***/

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth' ], function (){

    Route::resource('user', 'UserController');

    Route::group(['prefix' => 'user'], function (){
        Route::get('active_user/{id}', 'UserController@updateActive');
        Route::get('/', 'UserController@index')->name('user.index');
        Route::get('create', 'UserController@create')->name('user.create');
        Route::post('store', 'UserController@store')->name('user.store');
        Route::get('{id}/edit', 'UserController@edit')->name('user.edit');
        Route::post('{id}/update', 'UserController@update')->name('user.update');
        Route::get('{id}', 'UserController@destroy')->name('user.delete');
    });

    Route::group(['prefix' => 'cat'], function (){
        Route::get('/', 'CatController@index')->name('cat.index');
        Route::get('create', 'CatController@create')->name('cat.create');
        Route::post('store', 'CatController@store')->name('cat.store');
        Route::get('{id}/edit', 'CatController@edit')->name('cat.edit');
        Route::post('{id}/update', 'CatController@update')->name('cat.update');
        Route::get('{id}', 'CatController@destroy')->name('cat.delete');
    });

    Route::group(['prefix' => 'adv'], function (){
        Route::get('active_adv/{id}', 'AdvController@updateActive');
        Route::get('/', 'AdvController@index')->name('adv.index');
        Route::get('create', 'AdvController@create')->name('adv.create');
        Route::post('store', 'AdvController@store')->name('adv.store');
        Route::get('{id}/edit', 'AdvController@edit')->name('adv.edit');
        Route::post('{id}/update', 'AdvController@update')->name('adv.update');
        Route::get('{id}', 'AdvController@destroy')->name('adv.delete');
    });

    Route::group(['prefix' => 'news'], function (){
        Route::get('active_news/{id}', 'NewsController@updateActive');
        Route::get('get_sub_cat/{id}', 'NewsController@getSubCat');

        Route::get('/', 'NewsController@index')->name('news.index');
        Route::get('create', 'NewsController@create')->name('news.create');
        Route::post('store', 'NewsController@store')->name('news.store');
        Route::get('{id}/edit', 'NewsController@edit')->name('news.edit');
        Route::post('{id}/update', 'NewsController@update')->name('news.update');
        Route::get('{id}', 'NewsController@destroy')->name('news.delete');
    });

    Route::get('/', 'StatisticController@index')->name('index.index');

});