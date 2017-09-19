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

    public function getCustom() {
        $users = User::where('gender', 'f')->get(['id', 'name', 'biography']);
        $title = "Lista de Usuarios (Get Custom con Array)";
        return view('query.methods', compact('title', 'users'));
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        return view('pages.delete');
    }

    public function lists() {
        $users = User::orderBy('name', 'ASC')
                ->lists('name', 'id');
        return view('query.lists', compact('users'));
    }

    public function firstLast() {
        $first = User::first();
        $all = User::all();
        $last = $all->last();

        return view('query.first-last', compact('first', 'last'));
    }

    public function paginate() {
        $users = User::orderBy('id', 'DESC')
                ->paginate();

        return view('query.paginate', compact('users'));
    }

}
