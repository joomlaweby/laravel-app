<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function profile() {
        return view('userprofile', [
            'title' => 'User profile'
        ]);
    }
}
