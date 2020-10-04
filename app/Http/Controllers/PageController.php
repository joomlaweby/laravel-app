<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct() {
        $paths = [];

        foreach (\Route::getRoutes() as $route) {
            if ($route->getMethods()[0] !== 'GET') continue;

            $path = $route->getPath();

            $paths[$path] = $path === '/' ? 'Home' : ucfirst($path);
        }

        $paths = array_unique($paths);
        view()->share('nav-links', $paths);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Page $page)
    {
        return view('pages.show', [
            'title' => $page->title,
            'content' => $page->content
        ]);
    }

    public function index(Page $page)
    {
        return view('pages.admin.index', [
            'title' => $page->title,
            'content' => $page->content
        ]);
    }
}
