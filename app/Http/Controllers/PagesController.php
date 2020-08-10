<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function about() {
        return view('about', [
            'title' => 'About us'
        ]);
    }

    function contact() {
        return view('contact', [
            'title' => 'Contact us'
        ]);
    }

    function home() {
        return view('welcome', [
            'title' => 'Welcome',
            'posts' => [
                'Post 1',
                'Post 2',
                'Post 3'
            ]
        ]);
    }
}
