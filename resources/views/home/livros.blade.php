@extends('layouts.main')

@section('content')
    <div class="titulo">
        <p>LIVROS</p>
    </div>
    <div class="container">
        <div class="livros">
            <div class="bom-dia">
                <a href="{{ url('livro-bom-dia') }}">
                    <img src="{{ url('assets/img/bom-dia.png') }}" alt="">
                </a>
            </div>

            <div class="hora-da-papa mt-3">
                <a href="{{ url('livro-hora-da-papa') }}">
                    <img src="{{ url('assets/img/hora-papa.png') }}" alt="">
                </a>

            </div>
        </div>
    </div>
@endsection
