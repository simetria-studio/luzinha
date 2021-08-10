@extends('layouts.main')

@section('content')
    <div class="titulo">
        <p>JOGOS</p>
    </div>
    <div class="container">
        <div class="games">
            <div class="qual-cor  text-center">
                <a href="http://142.93.55.85/luzinha-qualacor/">
                    <img class="img-responsive w-50" src="{{ url('assets/img/qual.svg') }}" alt="">
                </a>
            </div>
            <div class=" qual-babete  text-center">
                <a href="http://142.93.55.85/luzinha-qualobabete/">
                    <img class="img-responsive w-50" src="{{ url('assets/img/jogo2.svg') }}" alt="">
                </a>
            </div>
        </div>
    </div>
@endsection
