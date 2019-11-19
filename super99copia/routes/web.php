<?php

//Rotas do Usuario
Route::get('logout', 'UserController@logout');
Route::get('cadastrar', 'UserController@register');
Route::post('new-user', 'UserController@registring');
Route::get('perfil', 'UserController@profile')->name('profile');
Route::post('profile-update', 'UserController@profileUpdate')->name('profile.update');


//Rotas Alternativas
Route::get('/', 'LojaController@index')->name('home');

Auth::routes();
Route::get('/home', 'HomeController@index');  
