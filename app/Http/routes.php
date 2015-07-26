<?php

Route::get('/',function()
{
  return view('index');
});

Route::get('about','PagesController@about');

Route::resource('articles', 'ArticlesController');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController'
]);