<?php

Route::get('/',function(){
	return view('home');
		//return "usando Git";
});
/*
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});


Route::get('user/{name}', function ($name) {
   return "Hola";
    //->where('name', '[A-Za-z]+');
})
->where('name', '[A-Za-z]+');
*/
Route::get('/controller', 'ambientesController@index');

Route::POST('/form', 'ambientesController@show');