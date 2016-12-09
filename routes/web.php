<?php

Route::get('/', ['as' => 'index', 'uses' => 'indexController@index']);

Route::get('/search', ['as' => 'search', 'uses' => 'searchController@search']);

Route::get('about', ['as' => 'about', 'uses' => 'contentController@about']);

Route::get('/category/{url}', ['as' => 'onepage', 'uses' => 'contentController@category'])->where('url', '[0-9a-z-]+');

Route::get('/php-articles', ['as' => 'phpArticles', 'uses' => 'contentController@category'])->where('php-articles', '[0-9a-z-]+');

Route::get('/article/{url}', ['as' => 'article', 'uses' => 'contentController@article'])->where('url', '[0-9a-z-]+');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
