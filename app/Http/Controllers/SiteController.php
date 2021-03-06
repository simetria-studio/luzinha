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

    public function livros()
    {
        return view('home.livros');
    }

    public function contatos()
    {
        return view('home.contatos');
    }

    public function sobre()
    {
        return view('home.sobre');
    }
    public function insMusica()
    {
        return view('home.inscricao-musica');
    }
    public function insBallet()
    {
        return view('home.inscricao-ballet');
    }
    public function livro1()
    {
        return view('home.livro-1');
    }
    public function livro2()
    {
        return view('home.livro2');
    }
    public function loja()
    {
        return view('home.loja-home');
    }
    public function produtoOne()
    {
        return view('home.loja-single');
    }
    public function produtoTwo()
    {
        return view('home.loja-single-2');
    }

    public function videos()
    {
        return view('home.videos');
    }
    public function jogos()
    {
        return view('home.jogos');
    }
    public function landingpage()
    {
        return view('home.landingpage');
    }
    public function lpbomdia()
    {
        return view('home.landing.landing-bd');
    }
    public function lphorapapa()
    {
        return view('home.landing.landing-hdp');
    }
    public function bomdia()
    {
        return view('home.livro-bom-dia');
    }
    public function horapapa()
    {
        return view('home.livro-hora-da-papa');
    }
}
