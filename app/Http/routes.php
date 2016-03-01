<?php
Route::get('/',function(){
	//return view('home');
	return "usando Git";
});



Route::get('/controller', 'ambientesController@index');

Route::POST('/form', 'ambientesController@show');