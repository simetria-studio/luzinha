@extends('layouts.main')

@section('content')
    <div class="titulo">
        <p>BEBÉS</p>
    </div>
    <div class="container">
        <div class="bebe">
            <div class="row">
                <div class="col-6  aulas aulas1 text-center">
                    <a href="{{ url('alimentacao') }}">
                        <img src="{{ url('assets/img/alimentacao.png') }}" alt="">
                    </a>
                    <p>ALIMENTAÇÃO</p>
                </div>
                <div class="col-6  aulas aulas2 text-center">
                    <a href="{{ url('educar') }}">
                        <img src="{{ url('assets/img/educar.png') }}" alt="">
                        <p>EDUCAR</p>
                    </a>
                </div>
                <div class="col-6  aulas aulas3 text-center">
                    <a href="{{ url('incricao-musica') }}">
                        <img src="{{ url('assets/img/musica.png') }}" alt="">
                        <p>AULAS DE MUSICA</p>
                    </a>
                </div>
                <div class="col-6 aulas aulas4 text-center">
                    <a href="{{ url('inscricao-ballet') }}">
                        <img src="{{ url('assets/img/ballet.png') }}" alt="">
                        <p>AULAS DE BALLET</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
