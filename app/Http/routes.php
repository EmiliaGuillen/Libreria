<?php
Route::get('/',function(){
	return view('home');
});



Route::get('/controller', 'ambientesController@index');

Route::POST('/form', 'ambientesController@show');