@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="livros">
            <div class="bom-dia">
                <a href="{{ url('livro-bom-dia') }}">
                    <img src="{{ url('assets/img/bom-dia.png') }}" alt="">
                </a>
            </div>

            <div class="hora-da-papa">
                <a href="{{ url('livro-hora-da-papa') }}">
                    <img src="{{ url('assets/img/hora-papa.png') }}" alt="">
                </a>

            </div>
        </div>
    </div>
@endsection
