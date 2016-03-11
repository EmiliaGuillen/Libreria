<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class UsuariosController extends Controller
{
    public function index()
    {
    	return 'index';
    }

    public function store(Request $req){ //query builder
    	DB::table('usuario')->insert([
    		'nombre' => $req->input('nombre'),
    		'nick'   => $req->input('nick'),
    		'email' => $req->input('email'),
    		'password'   => $req->input('password'),
    		'telefono' => $req->input('telefono'),
    		
    	]);

    	return 'Ok';
    }
}
