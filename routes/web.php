<?php

Route::get('/', ['as' => 'index', 'uses' => 'indexController@index']);
//Route::get('content/{url}', ['as' => 'content', 'uses' => 'indexController@content']);
Route::get('/par/{category}', ['as' => 'catalog', 'uses' => 'contentController@catalog'])->where('category', '[a-z-]+');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
