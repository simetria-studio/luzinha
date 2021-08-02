@extends('layouts.main')

@section('content')
    <div class="titulo">
        <p>BEBÉS</p>
    </div>
    <div class="container">
        <div class="bebe">
            <div class="row">
                <div class="col-6 mt-5">
                    <a href="">
                        <img src="{{ url('assets/img/alimentacao.png') }}" alt="">
                        <p>ALIMENTAÇÃO</p>
                    </a>
                </div>
                <div class="col-6 mt-5">
                    <a href="">
                        <img src="{{ url('assets/img/educar.png') }}" alt="">
                        <p>EDUCAR</p>
                    </a>
                </div>
                <div class="col-6 mt-5">
                    <a href="">
                        <img src="{{ url('assets/img/musica.png') }}" alt="">
                        <p>AULAS DE MUSICA</p>
                    </a>
                </div>
                <div class="col-6 mt-5">
                    <a href="">
                        <img src="{{ url('assets/img/ballet.png') }}" alt="">
                        <p>AULAS DE BALLET</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
