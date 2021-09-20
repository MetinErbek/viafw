<?php 



	

Route::all('', 'Site');
Route::all('/', 'Site');
Route::all('index', 'Site');
Route::all('deleteimg', 'Site', 'deleteimg');


Route::all('login', 'Login', 'index');
Route::all('login/logout', 'Login', 'logout');

///Route::all('login', 'Site', 'login');




