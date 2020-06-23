<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeController@index') -> name('home');
Route:: get('/edit/{id}', 'EmployeController@edit' ) -> name('edit');
Route:: post('/update/{id}', 'EmployeController@update') -> name('update');
