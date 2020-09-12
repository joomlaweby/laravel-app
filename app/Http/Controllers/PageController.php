<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
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
