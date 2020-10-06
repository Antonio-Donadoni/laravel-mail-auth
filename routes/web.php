<?php

use Illuminate\Support\Facades\Route;




Auth::routes();

Route::get('/', 'GuestController@index') -> name('company-index');

Route::get('/company/{id}', 'GuestController@show') -> name('company-show');

Route::get('/create', 'AdminController@create') -> name('company-create');
Route::post('/store', 'AdminController@store') -> name('company-store');

Route::get('/destroy/{id}', 'AdminController@destroy') -> name('company-destroy');

Route::get('/edit/{id}', 'AdminController@edit') -> name('company-edit');
Route::post('/update/{id}', 'AdminController@update') -> name('company-update');
