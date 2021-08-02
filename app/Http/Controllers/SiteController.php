<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function layout()
    {
        return view('layouts.main');
    }

    public function musicas()
    {
        return view('home.musicas');
    }
}
