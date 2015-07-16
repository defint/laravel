<?php

Route::get('/',function()
{
  return 'Home page';
});

Route::get('about','PagesController@about');

Route::resource('articles', 'ArticlesController');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController'
]);