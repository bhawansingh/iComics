<?php

Route::get('/', 'PagesController@home');


//Route::resource('comics','comicsController');

Route::get('comics/new/{time}','comicsController@newComics');

Route::get('comics/detail/{id}','comicsController@detail');