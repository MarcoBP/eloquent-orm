<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\User;

use Illuminate\Http\Request;

use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

class QueryController extends Controller
{
    public function getAll() {
    	$users = User::all();
    	$title = "Todos los Usuarios (All)";
    	return view('query.methods', compact('title', 'users'));
    }

    public function getGet($gender) {
    	$users = User::where('gender', $gender)->get();
    	$title = "Lista de Usuarios (Get)";
    	return view('query.methods', compact('title', 'users'));
    }

}
