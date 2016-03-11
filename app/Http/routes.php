<?php

use App\Usuario;

Route::get('/user', function(){
	return Usuario::all();
});

Route::get('/',function(){
	return view('website.index2');
});

Route::get('/controller', 'UsuariosController@index');

Route::post('/form', 'UsuariosController@store');

Route::get('/tienda',function(){
	return view('website.tienda');
});