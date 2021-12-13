<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return 'index method UserController';
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
        return 'id = ' . $id . ' show method UserController';
    }

    public function delete()
    {
        return 'delete method UserController';
    }
}
