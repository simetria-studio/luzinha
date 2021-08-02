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

    public function pais()
    {
        return view('home.pais');
    }
    public function alimentacao()
    {
        return view('home.alimentacao');
    }
    public function bebes()
    {
        return view('home.bebe');
    }

    public function educar()
    {
        return view('home.educar');
    }
}
