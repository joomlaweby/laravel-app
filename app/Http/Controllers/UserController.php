<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'title' => 'Users',
            'users' => User::latest('id')->limit(50)->get()
        ]);

    }

    public function show(User $user)
    {
        return view('users.show', [
            'title' => 'User profile',
            'user' => $user
        ]);
    }

    function profile(User $user) {
        return view('userprofile', [
            'title' => 'User profile',
            'user' => $user
        ]);
    }
}
