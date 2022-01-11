<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
//        return 'index method UserController';
        $users = DB::table('users')->limit(100)->get();
    }

    public function create()
    {
        return 'create method UserController';
    }

    public function auth()
    {
        return 'auth method UserController';
    }

    public function show(int $id)
    {
//        return 'id = ' . $id . ' show method UserController';
        $user = DB::table('users')->where('id', $id)->first();
    }

    public function delete()
    {
        return 'delete method UserController';
    }
}
