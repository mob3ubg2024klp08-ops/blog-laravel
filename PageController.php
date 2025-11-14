<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function post()
    {
        return view('post');
    }

    public function tentang()
    {
        return view('Tentang');
    }
}
