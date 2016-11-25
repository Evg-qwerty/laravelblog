<?php

Route::get('/', ['as' => 'index', 'uses' => 'indexController@index']);
Route::get('content/{url}', ['as' => 'content', 'uses' => 'indexController@content']);

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
