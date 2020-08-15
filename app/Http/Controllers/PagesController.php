<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

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
            'posts' => Article::latest('id')->limit(5)->get()
        ]);
    }
}
