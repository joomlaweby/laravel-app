<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TunesController extends Controller
{
    function index() {
        return view('tunes.index', [
            'title' => 'iTunes songs',
        ]);
    }
}
