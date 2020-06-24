<?php
// WARNING: TASK and Employes Sono opposte rispeto alla consegna dell'esercizio

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeController@index') -> name('home');
Route::get ('/showEmp/{id}', 'EmployeController@showEmp') -> name('showEmp');
Route:: get('/edit/{id}', 'EmployeController@edit' ) -> name('edit');
Route:: post('/update/{id}', 'EmployeController@update') -> name('update');

Route:: get('/task/{id}' , 'EmployeController@showTask')-> name('task');

Route:: get('/delete/{id}', 'EmployeController@delete') -> name('delete');
