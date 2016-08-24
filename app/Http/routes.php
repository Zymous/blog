<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Home\IndexController@index');

Route::get('/cate/{cate_id}', 'Home\IndexController@cate');

Route::get('/a/{art_id}', 'Home\IndexController@article');

Route::group(['prefix' =>'admin', 'namespace' =>'Admin'], function() {

    Route::any('login','LoginController@login');

    Route::get('auth','LoginController@auth');
});

Route::group(['middleware' => ['admin.login'],'prefix' =>'admin', 'namespace' =>'Admin'], function() {
    Route::get('index','IndexController@index');

    Route::get('info','IndexController@info');

    Route::get('quit','LoginController@quit');

    Route::any('pass','IndexController@pass');

    Route::post('cate/changeorder', 'CategoryController@changeOrder');

    Route::resource('category','CategoryController');

    Route::resource('article','ArticleController');

    Route::resource('links', 'LinksController');

    Route::resource('navs','NavsController');

    Route::get('config/putfile', 'ConfigController@putFile');

    Route::resource('config','ConfigController');

    Route::post('links/changeorder', 'LinksController@changeOrder');

    Route::post('navs/changeorder', 'NavsController@changeOrder');

    Route::post('config/changeorder', 'ConfigController@changeOrder');

    Route::post('config/changecontent', 'ConfigController@changeContent');

    Route::any('upload','IndexController@upload');

});

