<?php

Route::get('about','PagesController@about');
Route::get('articles','ArticlesController@index');
Route::get('articles/create','ArticlesController@create');
Route::post('articles/create','ArticlesController@store');
Route::get('articles/{id}','ArticlesController@show');

