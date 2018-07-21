<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users; //追加

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
}
