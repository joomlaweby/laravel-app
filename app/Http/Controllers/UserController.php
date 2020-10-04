<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function __construct() {
        $paths = [];

        foreach (\Route::getRoutes() as $route) {
            if ($route->getActionMethod()[0] !== 'GET') continue;

            $path = $route->getPath();

            $paths[$path] = $path === '/' ? 'Home' : ucfirst($path);
        }

        $paths = array_unique($paths);
        view()->share('nav_links', $paths);
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('users.index', [
            'title' => 'Users',
            'users' => User::latest('id')->limit(50)->get()
        ]);

    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('users.show', [
            'title' => 'User profile',
            'user' => $user
        ]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function profile(User $user) {
        return view('userprofile', [
            'title' => 'User profile',
            'user' => $user
        ]);
    }
}
