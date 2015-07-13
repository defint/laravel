<?php

Route::get('about','PagesController@about');

Route::resource('articles', 'ArticlesController');